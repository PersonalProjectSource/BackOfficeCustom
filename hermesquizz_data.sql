
INSERT INTO `langue` (`id`, `libelle`, `code`) VALUES
(1, 'Français', 'fr'),
(2, 'Anglais', 'en'),
(3, 'Japonais', 'ja'),
(4, 'Chinois simplifié', 'zh'),
(5, 'Espagnol', 'es'),
(6, 'Italien', 'it');

INSERT INTO `user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`) VALUES
(1, 'admin', 'admin', 'admin@mail.com', 'admin@mail.com', 1, '8x80k677924gwooogs0kw0kkk4cos4c', 'U1DLbXoX1ZcZoyKPP1UxjAwZj8Ofkh5xieGQnDEdvgA6q5wGrnZi35llyyhSGgITjCfdjhVmL3xLKbXvK5+l/g==', '2014-07-25 16:29:26', 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(2, 'superadmin', 'superadmin', 'superadmin@mail.com', 'superadmin@mail.com', 1, '2l4lgrww8jswwsc844o4gkgsw404ocw', 'h3AHoTssUigo2FF8fOsJil/AJu4hSb3Ba4w0CZOwbG+I8pW0JjPoDb0BkLnFqMDZa/srF+3kfvGqKFPmCM3ynA==', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL),
(3, 'user', 'user', 'user@mail.com', 'user@mail.com', 1, 's9yh737zzm88o4ww0840wow0kgk4ooc', 'FS43Tlqv6PAZUokHg4atkaKDhaZ/Hu3ffTkuynMY0rCpn5DGfIZ7fIlejhTsjeIgskYRLyvmPfhSjzbJUKCBGA==', NULL, 0, 0, NULL, NULL, NULL, 'a:0:{}', 0, NULL);

INSERT INTO `fos_group` (`id`, `name`, `roles`) VALUES
(1, 'Groupe Super Admin', 'a:2:{i:0;s:10:"ROLE_ADMIN";i:1;s:16:"ROLE_SUPER_ADMIN";}'),
(2, 'Groupe Admin', 'a:1:{i:0;s:10:"ROLE_ADMIN";}'),
(3, 'Groupe User', 'a:1:{i:0;s:9:"ROLE_USER";}');

INSERT INTO `fos_user_user_group` (`user_id`, `group_id`) VALUES
(1, 2),
(2, 1),
(3, 3);

INSERT INTO `hermesuser` (`id`, `nom`, `prenom`, `email`, `hermesid`, `position`, `end`) VALUES
(1, 'Dumas', 'Axel', 'axel.dumas@gmail.com', '123Ae7', 0, 1),
(2, 'de Seynes', 'Guillaume', 'guillaume.deseynes@mail.com', '44r58', 0, 1),
(3, 'Puesh', 'Bertrand', 'bertrand.puesh@mail.com', 'a78df', 0, 1);

INSERT INTO `question` (`id`, `position`, `type`) VALUES
(1, NULL, 0),
(2, NULL, 1),
(3, NULL, 1),
(4, NULL, 0),
(5, NULL, 0),
(6, NULL, 0),
(7, NULL, 0),
(8, NULL, 1),
(9, NULL, 1),
(10, NULL, 0),
(11, NULL, 1);

INSERT INTO `question_translation` (`id`, `object_id`, `langues_id`, `libelle`, `reponse1`, `reponse2`, `reponse3`, `reponse4`, `reponse5`, `reponse6`) VALUES
(1, 1, 1, 'Qui a dessiné La Maison des Carrés?', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 2, 1, 'Quelles saisons sont présentées dans La Maison des carrés?', 'PE13', 'AH13', 'PE14', 'AH14', NULL, NULL),
(3, 3, 1, 'Quelle est l’animation produit majeure pour ce lancement ? (grande pièce sous les toits)', 'bandanas', 'twilly', 'châles cachemire', NULL, NULL, NULL),
(4, 4, 1, 'Lister2 noms de dessins qui ressortent si vous tapez le mot « Nature » dans la barre de recherche?', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 5, 1, 'Comment trouver un carré sur le thème "Equestre, chevaux" via le site ?', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 6, 1, 'Donner une référence complète d’un format 140 rouge avec des fleurs.', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 7, 1, 'Citez 4 produits présents dans la chambre des garçons', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 8, 1, 'La Maison des Carrés est accessible depuis :', 'un ordinateur', 'une tablette', 'un portable', NULL, NULL, NULL),
(9, 9, 1, 'La Maison des Carrés est-elle :', 'Un magasin e-commerce dédié à la Soie dans mon pays?', 'Une vitrine supplémentaire pour mon magasin?', 'Une façon innovante de faire découvrir et aimer nos carrés ?', 'Un allié pour générer du trafic dans mon magasin ?', 'Un outil d''informations complet (histoires de carrés, nouages, actualités..) pour nos clients ou futurs clients', 'Un moyen de renforcer la relation avec les clients en partageant l’actualité de la Soie'),
(10, 10, 1, 'Comment un client procède-t-il pour aller en magasin avec sa sélection Internet?', NULL, NULL, NULL, NULL, NULL, NULL),
(11, 11, 1, 'Quelles sont les modalités d’échange d’un carré acheté sur Internet?', 'Echange possible en magasin ou sur Internet(sous x jours)', 'Avoir (credit note) en magasin ou sur internet(sous x jours)', 'S’adresser au magasin Internet pour un remboursement (sous x jours)', NULL, NULL, NULL);


INSERT INTO `question_userhermes` (`id`, `question_id`, `contenu`, `reponse1`, `reponse2`, `reponse3`, `reponse4`, `reponse5`, `reponse6`, `usersHermes_id`) VALUES
(1, 1, 'Proin ac luctus lorem. Suspendisse feugiat interdum vehicula. Pellentesque sit amet ullamcorper orci, vitae rhoncus nunc. Nunc bibendum justo a tortor venenatis tristique. Suspendisse varius ligula eget rutrum auctor. Aliquam fringilla et eros sit amet porta. Nullam pellentesque justo eu sapien volutpat auctor.', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(2, 2, NULL, 1, 0, 1, 1, NULL, NULL, 1),
(3, 3, NULL, 1, 0, 1, NULL, NULL, NULL, 1),
(4, 4, 'Morbi vehicula, enim sit amet dapibus sodales, mi massa eleifend nulla, quis pharetra arcu urna at orci. Quisque a turpis quam. Suspendisse adipiscing justo sit amet metus venenatis faucibus. Praesent a hendrerit enim, a rhoncus nulla. Vivamus auctor, eros in euismod ullamcorper, orci purus molestie erat,', NULL, NULL, 0, NULL, NULL, NULL, 1),
(5, 5, 'Proin ac luctus lorem. Suspendisse feugiat interdum vehicula. Pellentesque sit amet ullamcorper orci, vitae rhoncus nunc. Nunc bibendum justo a tortor venenatis tristique. Suspendisse varius ligula eget rutrum auctor. Aliquam fringilla et eros sit amet porta. Nullam pellentesque justo eu sapien volutpat auctor. Proin ac luctus lorem. Suspendisse feugiat interdum vehicula. Pellentesque sit amet ullamcorper orci, vitae rhoncus nunc. Nunc bibendum justo a tortor venenatis tristique. Suspendisse varius ligula eget rutrum auctor. Aliquam fringilla et eros sit amet porta. Nullam pellentesque justo eu sapien volutpat auctor. ', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(6, 6, 'Morbi vehicula, enim sit amet dapibus sodales, mi massa eleifend nulla, quis pharetra arcu urna at orci. Quisque a turpis quam. Suspendisse adipiscing justo sit amet metus venenatis faucibus. Praesent a hendrerit enim, a rhoncus nulla. Vivamus auctor, eros in euismod ullamcorper, orci purus molestie erat,', NULL, NULL, NULL, NULL, NULL, NULL, 1);

