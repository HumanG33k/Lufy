<?php

/**
 * main actions.
 *
 * @package    lufy
 * @subpackage main
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class mainActions extends sfActions
{


  /**
   * @brief
   * @param[in]
   * @return
   */
  public function executeIndex(sfWebRequest $request)
  {
    $this->forward('main', 'gamersassembly');
  }

  /**
   * @brief
   * @param[in]
   * @return
   */
  public function executeGamersassembly(sfWebRequest $request)
  {
    // Statistiques
    $this->nb_news = Doctrine_Query::create()
            ->select('COUNT(n.id_news)')
            ->from('News n')
            ->where('n.status', 1)
            ->fetchOne(array(), Doctrine_Core::HYDRATE_SINGLE_SCALAR);

    $this->nb_pages = Doctrine_Query::create()
            ->select('COUNT(p.id_page)')
            ->from('Page p')
            ->fetchOne(array(), Doctrine_Core::HYDRATE_SINGLE_SCALAR);

    $this->nb_partners = Doctrine_Query::create()
            ->select('COUNT(p.id_partner)')
            ->from('Partner p')
            ->fetchOne(array(), Doctrine_Core::HYDRATE_SINGLE_SCALAR);

    $this->nb_users = Doctrine_Query::create()
            ->select('COUNT(u.id)')
            ->from('SfGuardUser u')
            ->fetchOne(array(), Doctrine_Core::HYDRATE_SINGLE_SCALAR);
  }

  /**
   * @brief
   * @param[in]
   * @return
   */
  public function executeLogin(sfWebRequest $request)
  {
    $this->setLayout('login');
  }

  /**
   * @brief
   * @param[in]
   * @return
   */
  public function executeParameters(sfWebRequest $request)
  {

  }

  /**
   * @brief
   * @param[in]
   * @return
   */
  public function executeClearCache(sfWebRequest $request)
  {
    chdir(sfConfig::get('sf_root_dir'));
    $task = new sfCacheClearTask(sfContext::getInstance()->getEventDispatcher(), new sfFormatter());
    $task->run(array(), array());
    $this->getUser()->setFlash('success', 'Fin du nettoyage du cache.');
    $this->redirect($request->getReferer());
    //$request->getReferer();
  }

  /**
   * @brief
   * @param[in]
   * @return
   */
  public function executeError404(sfWebRequest $request)
  {

  }


  /**
   * @brief
   * @param[in]
   * @return
   */
  public function executeError401(sfWebRequest $request)
  {

  }

}
