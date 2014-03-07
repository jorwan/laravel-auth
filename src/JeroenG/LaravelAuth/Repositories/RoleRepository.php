<?php namespace JeroenG\LaravelAuth\Repositories;

/**
 * This is the interface for the role repository, which handles all requests for role data.
 *
 * @package LaravelAuth
 * @subpackage Repositories
 * @category Interfaces
 * @author 	JeroenG
 * 
 **/
interface RoleRepository {
	
	/**
	 * Get all roles
	 *
	 * @return object
	 **/
	public function all();

	/**
	 * Find the role with the given id.
	 *
	 * @param int $id The id of the role.
	 * @return object
	 **/
	public function find($id);

	/**
	 * Create a new role.
	 *
	 * @param string $roleName Name of the role.
	 * @param text $description Description of the role (max 255 characters).
	 * @param smallint $level The importance of the role (in comparison to others).
	 * @return void
	 **/
	public function addRole($roleName, $description, $level);

	/**
	 * Get the id of the role with the given name.
	 *
	 * @param string $roleName The name of the role as it is in the database.
	 * @return void
	 **/
	public function getRoleId($roleName);

	/**
	 * Check if a role already exists.
	 *
	 * @param string $roleName The name of the role as it is in the database.
	 * @param boolean $withTrashed Should soft-deleted entries be included? Default set to false.
	 * @return boolean
	 **/
	public function exists($roleName, $withTrashed);
}