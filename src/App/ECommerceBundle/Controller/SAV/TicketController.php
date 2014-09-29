<?php

namespace App\ECommerceBundle\Controller\SAV;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use App\ECommerceBundle\Entity\SAV\Ticket;
use App\ECommerceBundle\Form\SAV\TicketType;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Ticket controller.
 *
 * @Route("/ticket")
 */
class TicketController extends Controller
{

    /**
     * Lists all Ticket entities.
     *
     * @Route("/", name="ticket")
     * @Method("GET")
     * @Template()
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        if ($request->isXmlHttpRequest()) {

            /* DataTable Parameters*/
            $lang = $request->get('lang');
            $sortCol = $request->get('iSortCol_0');
            $sortDir = $request->get('iSortDir_0');
            $start = $request->get('iDisplayStart');
            $limit = $request->get('iDisplayLength');

            /* Columns */
            $columns = array();
            $columns[0] = 'id';
            $columns[1] = 'name';
            $columns[2] = 'type';
            $columns[3] = 'state';
            $columns[4] = 'content';
            $columns[5] = 'created_at';

            /* Query Result */
            $qb = $em->getRepository('AppECommerceBundle:SAV\Ticket')->createQueryBuilder('a');
            $qb_count = clone $qb;
            $qb->setFirstResult($start);
            $qb->setMaxResults($limit);
            $qb->orderBy('a.'.$columns[$sortCol], $sortDir);
            $result =  $qb->getQuery()->getResult();

            /* Query Count */
            $qb_count->select('COUNT(a)');
            $total =  $qb_count->getQuery()->getSingleScalarResult();

            $output = array(
                "sEcho" => intval($request->get('sEcho')),
                "iTotalRecords" => intval($total),
                "iTotalDisplayRecords" => intval($total),
                "aaData" => array()
            );

            /* Parse Result */
            foreach ($result as $e) {
                $row = array();
                $row[] = (string) $e->getId();
                $row[] = "-"; //TODO Customer
                $row[] = (string) $e->getEmail();
                $row[] = (string) $e->getType();
                $row[] = (string) $e->getState();
                $row[] = "-"; //TODO Last Message
                $row[] = "-"; //TODO Last Message DATE


                $row[] = $this->container->get('app.media.twig')->formatImage($e, 'thumb', 50);
                $row[] = '<a class="btn btn-primary btn-sm" href="'.$this->generateUrl("ticket_edit", array('id' => $e->getId())).'"><i class="fa fa-crop"></i></a>
                          <a class="btn btn-danger btn-sm" onclick="confirmbox()"><i class="fa fa-trash-o "></i></a>';
                $output['aaData'][] = $row ;


            }
            $response = new JsonResponse();
            $response->setData($output);

            return $response;
        }
    }
    /**
     * Creates a new Ticket entity.
     *
     * @Route("/", name="ticket_create")
     * @Method("POST")
     * @Template("AppECommerceBundle:SAV\Ticket:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Ticket();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);
        $em = $this->getDoctrine()->getManager();

        $data = $request->get($form->getName(), array());
        $customer = $em->getRepository('AppECommerceBundle:Customer')->findOneBy(array("email" => $data["email"]));

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity->setCustomer($customer);
            $entity->setState("nouveau");
            $em->persist($entity);
            $em->flush();

            $from = $data["email"];
            $to = "contact@backoffice.com";
            $subject = "[SAV] Prise de contact";
            $body = $data["message"]["content"];
            $this->get('app.adminbundle.services.mailer')->send($from, $to, $subject, $body);
            return $this->redirect($this->generateUrl('ticket'));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Ticket entity.
     *
     * @param Ticket $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Ticket $entity)
    {
        $form = $this->createForm(new TicketType(), $entity, array(
            'action' => $this->generateUrl('ticket_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Ticket entity.
     *
     * @Route("/new", name="ticket_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Ticket();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Ticket entity.
     *
     * @Route("/{id}", name="ticket_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppECommerceBundle:SAV\Ticket')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Ticket entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Ticket entity.
     *
     * @Route("/{id}/edit", name="ticket_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppECommerceBundle:SAV\Ticket')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Ticket entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Ticket entity.
    *
    * @param Ticket $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Ticket $entity)
    {
        $form = $this->createForm(new TicketType(), $entity, array(
            'action' => $this->generateUrl('ticket_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Ticket entity.
     *
     * @Route("/{id}", name="ticket_update")
     * @Method("PUT")
     * @Template("AppECommerceBundle:SAV\Ticket:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppECommerceBundle:SAV\Ticket')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Ticket entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('ticket_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Ticket entity.
     *
     * @Route("/{id}", name="ticket_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppECommerceBundle:SAV\Ticket')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Ticket entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('ticket'));
    }

    /**
     * Creates a form to delete a Ticket entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ticket_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
