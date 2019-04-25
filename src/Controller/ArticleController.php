<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/10/17
 * Time: 16:07
 * PHP version 7
 */
namespace App\Controller;

use App\Model\ArticleManager;

/**
 * Class ItemController
 *
 */
class ArticleController extends AbstractController
{
    /**
     * Display article informations specified by $id
     *
     * @param int $id
     *
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function show(int $id)
    {
        $articleManager = new ArticleManager();
        $article = $articleManager->selectOneArticleById($id);

        return $this->twig->render('Article/show.html.twig', [
            'article' => $article,
        ]);
    }
}
