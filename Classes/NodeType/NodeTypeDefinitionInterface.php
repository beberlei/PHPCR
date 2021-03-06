<?php
declare(ENCODING = 'utf-8');

/*                                                                        *
 * This script belongs to the FLOW3 package "PHPCR".                      *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU Lesser General Public License as published by the *
 * Free Software Foundation, either version 3 of the License, or (at your *
 * option) any later version.                                             *
 *                                                                        *
 * This script is distributed in the hope that it will be useful, but     *
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHAN-    *
 * TABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU Lesser       *
 * General Public License for more details.                               *
 *                                                                        *
 * You should have received a copy of the GNU Lesser General Public       *
 * License along with the script.                                         *
 * If not, see http://www.gnu.org/licenses/lgpl.html                      *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
 *                                                                        */

/**
 * The NodeTypeDefinition interface provides methods for discovering the
 * static definition of a node type. These are accessible both before and
 * after the node type is registered. Its subclass NodeType adds methods
 * that are relevant only when the node type is "live"; that is, after it
 * has been registered. Note that the separate NodeDefinition interface only
 * plays a significant role in implementations that support node type
 * registration. In those cases it serves as the superclass of both NodeType
 * and NodeTypeTemplate. In implementations that do not support node type
 * registration, only objects implementing the subinterface NodeType will
 * be encountered.
 *
 * @version $Id$
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 * @license http://opensource.org/licenses/bsd-license.php Simplified BSD License
 * @api
 */
interface PHPCR_NodeType_NodeTypeDefinitionInterface {

	/**
	 * Returns the name of the node type.
	 * In implementations that support node type registration, if this
	 * NodeTypeDefinition object is actually a newly-created empty
	 * NodeTypeTemplate, then this method will return null.
	 *
	 * @return string a String
	 * @api
	 */
	public function getName();

	/**
	 * Returns the names of the supertypes actually declared in this node type.
	 * In implementations that support node type registration, if this
	 * NodeTypeDefinition object is actually a newly-created empty
	 * NodeTypeTemplate, then this method will return an array containing a
	 * single string indicating the node type nt:base.
	 *
	 * @return array an array of Strings
	 * @api
	 */
	public function getDeclaredSupertypeNames();

	/**
	 * Returns true if this is an abstract node type; returns false otherwise.
	 * An abstract node type is one that cannot be assigned as the primary or
	 * mixin type of a node but can be used in the definitions of other node
	 * types as a superclass.
	 *
	 * In implementations that support node type registration, if this
	 * NodeTypeDefinition object is actually a newly-created empty
	 * NodeTypeTemplate, then this method will return false.
	 *
	 * @return boolean a boolean
	 * @api
	 */
	public function isAbstract();

	/**
	 * Returns true if this is a mixin type; returns false if it is primary.
	 * In implementations that support node type registration, if this
	 * NodeTypeDefinition object is actually a newly-created empty
	 * NodeTypeTemplate, then this method will return false.
	 *
	 * @return boolean a boolean
	 * @api
	 */
	public function isMixin();

	/*
	 * Returns true if nodes of this type must support orderable child nodes;
	 * returns false otherwise. If a node type returns true on a call to this
	 * method, then all nodes of that node type must support the method
	 * Node.orderBefore. If a node type returns false on a call to this method,
	 * then nodes of that node type may support Node.orderBefore. Only the primary
	 * node type of a node controls that node's status in this regard. This setting
	 * on a mixin node type will not have any effect on the node.
	 * In implementations that support node type registration, if this
	 * NodeTypeDefinition object is actually a newly-created empty
	 * NodeTypeTemplate, then this method will return false.
	 *
	 * @return boolean a boolean
	 * @api
	 */
	public function hasOrderableChildNodes();

	/**
	 * Returns TRUE if the node type is queryable, meaning that the
	 * available-query-operators, full-text-searchable and query-orderable
	 * attributes of its property definitions take effect. See
	 * PropertyDefinition#getAvailableQueryOperators(),
	 * PropertyDefinition#isFullTextSearchable() and
	 * PropertyDefinition#isQueryOrderable().
	 *
	 * If a node type is declared non-queryable then these attributes of its
	 * property definitions have no effect.
	 *
	 * @return boolean a boolean
	 * @api
	 */
	public function isQueryable();

	/**
	 * Returns the name of the primary item (one of the child items of the nodes
	 * of this node type). If this node has no primary item, then this method
	 * returns null. This indicator is used by the method Node.getPrimaryItem().
	 * In implementations that support node type registration, if this
	 * NodeTypeDefinition object is actually a newly-created empty
	 * NodeTypeTemplate, then this method will return null.
	 *
	 * @return string a String
	 * @api
	 */
	public function getPrimaryItemName();

	/**
	 * Returns an array containing the property definitions actually declared
	 * in this node type.
	 * In implementations that support node type registration, if this
	 * NodeTypeDefinition object is actually a newly-created empty
	 * NodeTypeTemplate, then this method will return null.
	 *
	 * @return array an array of PropertyDefinitions
	 * @api
	 */
	public function getDeclaredPropertyDefinitions();

	/**
	 * Returns an array containing the child node definitions actually
	 * declared in this node type.
	 * In implementations that support node type registration, if this
	 * NodeTypeDefinition object is actually a newly-created empty
	 * NodeTypeTemplate, then this method will return null.
	 *
	 * @return array an array of NodeDefinitions
	 * @api
	 */
	public function getDeclaredChildNodeDefinitions();
}

?>