<?php
/**
 * Created by PhpStorm.
 * User: pierreportejoie
 * Date: 12/08/16
 * Time: 11:10
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class MainController extends Controller{

    /**
     * @Route("/")
     */
    public function showAction(){

        //DUMMY SERVICE
        $pitch1 = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
        $service1 = array(
            'name' => 'Jean-Marie Bigard',
            'category' => 'comptabilite',
            'categoryName' => 'Comptablité',
            'photoUrl' => 'images/bigard.png',
            'pitch' => $pitch1,
            'recom' => rand(1,99)
        );

        //DUMMY CATEGORY
        $cat1 = array(
            'name' => 'coworking',
            'displayName' => 'Coworking',
            'pitch' => 'hitecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolore'
        );

        //DUMMY FORUM POST
        $post1 = array(
            'title' => 'Titre de la conversation',
            'date' => '01/01/2017',
            'name' => 'Jean Dujardin',
            'photoUrl' => 'images/bigard.png',
            'content' => "At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.",
        );

        //DUMMY TESTIMONIAL
        $testimonial1 = array(
            'name' => 'Patrick Sébastien',
            'photoUrl' => 'images/bigard.png',
            'content' => "On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains."
        );

        //DUMMY DATA
        $user = array(
            'name' => 'Julie',
            'messages' => rand(0,9)
        );
        $listing_extracts = array($service1, $service1, $service1);
        $categories = array($cat1, $cat1, $cat1, $cat1);
        $forum_posts = array($post1, $post1, $post1);
        $testimonials = array($testimonial1, $testimonial1, $testimonial1);

        return $this->render('V2/index.html.twig',[
            'title' => 'Entreprenons ensemble | Upsters',
            'user' => $user,
            'listingExtracts' => $listing_extracts,
            'categories' => $categories,
            'forumPosts' => $forum_posts,
            'testimonials' => $testimonials
        ]);
    }
}