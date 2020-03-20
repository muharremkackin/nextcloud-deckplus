<?php

namespace OCA\DeckPlus\Controller;

use OCP\IRequest;
use OCP\AppFramework\Controller;

class NoteController extends Controller 
{
    public function __construct(string $AppName, IRequest $request) 
    {
        parent::__construct($AppName, $request);
    }

    /**
     * @NoAdminRequired
     */
    public function index() 
    {

    }

    /**
     * @NoAdminRequired
     * 
     * @param int $id
     */
    public function show(int $id) 
    {

    }

    /**
     * @NoAdminRequired
     * 
     * @param string $title
     * @param string $content
     */
    public function create(string $title, string $content)
    {

    }

    /**
     * @NoAdminRequired
     * 
     * @param int $id
     * @param string $title
     * @param string $content
     */
    public function update(int $id, string $title, string $content) 
    {

    }

    /**
     * @NoAdminRequired
     * 
     * @param int @id
     */
    public function destroy(int $id)
    {

    }
}