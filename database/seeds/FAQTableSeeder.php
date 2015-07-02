<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\FaqCategory;
use App\FaqItem;
use App\User;

class FAQTableSeeder extends Seeder {

    public function run(){

        DB::table('faq_categories')->truncate();
        DB::table('faq_items')->truncate();

        $FAQ_items = array(
             0 => array(
                'question' => 'Comment ajouter des vins depuis l’interface ?',
                'answer' => 'Pour ajouter des vins depuis l’interface du tableau de bord, rendez-vous simplement dans l’onglet en haut à gauche et cliquez sur le bouton “Ajouter”. Vous devrez alors entrer quelques informations comme le nom du vin, l’année, le prix etc.',
                'category_id' => 1
            ),
            1 => array(
                'question' => 'Comment supprimer un vin  ?',
                'answer' => 'Pour supprimer un vin depuis l’interface du tableau de bord, rendez-vous simplement dans l’onglet en haut à gauche et cliquez sur le bouton “Supprimer” qui se trouve à droite de la ligne du vin en question. Attention, cette action est irréversible.',
                'category_id' => 1
            ),
            2 => array(
                'question' => 'Comment ajouter ou modifier le logo de mon entreprise ?',
                'answer' => 'Pour ajouter ou modifier le logo de votre entreprise, rendez-vous simplement dans l’onglet en “Utilisateur” à gauche et cliquez sur le bouton gris à côté de votre nom d’entreprise. Vous devrez alors sélectionner un fichier .JPG se trouvant sur votre ordinateur afin de le mettre à jour. ',
                'category_id' =>  1
            ),
            3 => array(
                'question' => 'Puis-je ajouter d’autres informations ?',
                'answer' => 'Vous ne pouvez pas ajouter d’autres informations, cependant si vous juger nécessaire la mise en ligne d’informations supplémentaires, contactez-nous pour nous en faire part.',
                'category_id' => 1
            ),
            4 => array(
                'question' => 'Puis-je réinitialiser toute ma liste de vins ?',
                'answer' => 'Oui, vous pouvez supprimer les vins qui ne sont plus disponibles dans votre cave, mais si ce travail s’avère long car votre liste est longue vous pouvez alors nous contacter et nous procéderons à cette réinitialisation. ',
                'category_id' => 1
            ),
            5 => array(
                'question' => 'Comment ajouter ou modifier le logo de mon entreprise ?',
                'answer' => 'Pour ajouter ou modifier le logo de votre entreprise, rendez-vous simplement dans l’onglet en “Utilisateur” à gauche et cliquez sur le bouton gris à côté de votre nom d’entreprise. Vous devrez alors sélectionner un fichier .JPG se trouvant sur votre ordinateur afin de le mettre à jour. ',
                'category_id' => 2
            ),
            6 => array(
                'question' => 'Comment modifier mes informations personnelles  ?',
                'answer' => 'Pour modifier vos informations personnelles, rendez-vous simplement dans l’onglet en “Utilisateur” à gauche et cliquez sur le bouton “modifier” en haut à droite. Vous serez invité à modifier les informations existantes une fois votre mot de passe vérifié. ',
                'category_id' => 2
            ),
            7 => array(
                'question' => 'Puis-je avoir un autre compte avec un autre accès ?',
                'answer' => 'Non, vous ne pouvez avoir qu’un seul compte par cave, en revanche vous pouvez communiquer vos identifiants de connexion à une autre personne de confiance afin qu’elle puisse également ajouter et modifier la liste de vos vins disponibles.',
                'category_id' => 2
            ),
            8 => array(
                'question' => 'Comment supprimer mon compte ?',
                'answer' => 'Vous ne pouvez pas supprimer votre compte depuis l’interface. Si vous souhaitez vraiment réaliser cette action, contactez-nous et nous procéderons à la suppression de votre compte.',
                'category_id' => 2
            ),
            9 => array(
                'question' => 'Si je perds mon mot de passe, que se passe-t-il ?',
                'answer' => 'Si il vous arrive d’égarer votre mot de passe, merci de nous contacter, nous procéderons à la réinitialisation de votre mot de passe après une vérification d’identité. ',
                'category_id' => 2
            ),
            10 => array(
                'question' => 'Comment modifier mon mot de passe ?',
                'answer' => 'Pour modifier votre mot de passe, rendez-vous simplement dans l’onglet en “Utilisateur” à gauche et cliquez sur le bouton “modifier” en haut à droite. Vous pourrez alors modifier votre mot de passe. ',
                'category_id' => 2
            ),
            11 => array(
                'question' => 'Qui a accès aux informations que je partage ?',
                'answer' => 'Seul WINO S.A.S a accès aux informations que vous partagez. Une fois l’application mobile disponible nous utiliserons les données afin d’indiquer aux utilisateurs la disponibilité des vins dans votre cave. En aucun cas, les données seront partagées, vendues ou échangées avec d’autres entreprises ou cavistes. ',
                'category_id' => 3
            ),
            12 => array(
                'question' => 'Quand l’application sera disponible  ?',
                'answer' => 'Nous travaillons dur pour l’application soit disponible le plus rapidement, nous vous tiendrons régulièrement à jour. ',
                'category_id' => 3
            ),
            13 => array(
                'question' => 'Puis-je inviter d’autres cavistes à s’inscrire ?',
                'answer' => 'Oui, aucun problème. En revanche, il n’est pas possible de s’inscrire, il faudra donc rentrer en contact avec nous pour valider certains critères. ',
                'category_id' => 3
            ),

        );

        $FAQ_categories = [
            'Tableau de bord',
            'Compte utilisateur',
            'Autres'
        ];

        foreach($FAQ_categories as $category){
            FaqCategory::create([
                'name' => $category,
            ]);
        }

        foreach ($FAQ_items as $item) {
            FaqItem::create([
                'question' => $item['question'],
                'answer' => $item['answer'],
                'category_id' => $item['category_id']
            ]);
        }

    }
}
