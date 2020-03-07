<?php
/**
 * Fuel is a fast, lightweight, community driven PHP 5.4+ framework.
 *
 * @package    Fuel
 * @version    1.8.2
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2019 Fuel Development Team
 * @link       https://fuelphp.com
 */

/**
 * 記事コントローラ
 *
 * @package  app
 * @extends  Controller
 */
class Controller_Article extends Controller
{
	/**
	 * 記事一覧
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_index()
	{
		$view = View::forge('layout');
		$view->content = View::forge('article/index');
		return $view;
	}

	/**
	 * 記事表示
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_show()
	{
		$params['id'] = $this->param('id');

		$view = View::forge('layout');
		$view->content = View::forge('article/show', $params);
		return $view;
	}

	/**
	 * 記事編集
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_edit()
	{
		$params['id'] = $this->param('id');

		$view = View::forge('layout');
		$view->content = View::forge('article/edit', $params);
		return $view;
	}

	/**
	 * 記事作成
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_create()
	{
		$view = View::forge('layout');
		$view->content = View::forge('article/edit');
		return $view;
	}
}
