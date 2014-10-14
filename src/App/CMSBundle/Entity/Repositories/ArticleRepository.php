<?php



namespace App\CMSBundle\Entity\Repositories;

use Doctrine\ORM\EntityRepository;

class ArticleRepository extends EntityRepository {


    public function getArticleList($oRequest) {

        //$qb = $em->getRepository('AppCMSBundle:Article')->createQueryBuilder('a');
        //$qb->select('a');

        $qb = $this->createQueryBuilder('a')->select();


        /*$qb_count = clone $qb;
        $qb->setFirstResult($oRequest->get('iDisplayStart'));
        $qb->setMaxResults($oRequest->get('iDisplayLength'));
        */


        $result =  $qb->getQuery()->getResult();
        var_dump($result);die;
        //$qb_count->select('COUNT(a)');
        //$total =  $qb_count->getQuery()->getSingleScalarResult();

        return $result;
    }


} 