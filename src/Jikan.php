<?php
/**
*	Jikan - MyAnimeList Unofficial API @version 1.0.0 beta
*	Developed by Nekomata | irfandahir.com
*	
*	This is an unofficial MAL API that provides the features that the official one lacks.
*	Jikan scraps web pages through a modular method, parses the data you require from them and returns it back as a PHP/JSON array.
*	Therefore, no authentication is needed for fetching anime, manga, character, people, search result data.
*
*	Jikan is in no way affiliated with MyAnimeList.
*/
namespace Jikan;

require 'config.php';


class Jikan
{

    public $response = [];

	public function __construct() {
		return $this;
	}

	/*
	 * Anime
	 */
	public function Anime(String $id = null, Array $extend = []) {
	    $this->response = (array) (new Get\Anime($id, $extend))->response;

	    return $this;
    }

    /*
     * Manga
     */
    public function Manga($id) {

        return $this;
    }

    /*
     * Character
     */
    public function Character($id) {

        return $this;
    }

    /*
     * Person
     */
    public function Person($id) {

        return $this;
    }

    /*
     * User List
     */
    public function UserList($id) {

        return $this;
    }


}