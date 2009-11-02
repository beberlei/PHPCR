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
 * The PropertyDefinitionTemplate interface extends PropertyDefinition with the
 * addition of write methods, enabling the characteristics of a child property
 * definition to be set, after which the PropertyDefinitionTemplate is added to
 * a NodeTypeTemplate.
 *
 * See the corresponding get methods for each attribute in PropertyDefinition for
 * the default values assumed when a new empty PropertyDefinitionTemplate is created
 * (as opposed to one extracted from an existing NodeType).
 *
 * @version $Id$
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 * @license http://opensource.org/licenses/bsd-license.php Simplified BSD License
 * @api
 */
interface PHPCR_NodeType_PropertyDefinitionTemplateInterface extends PHPCR_NodeType_PropertyDefinitionInterface {

	/**
	 * Sets the name of the property.
	 *
	 * @param string $name a String.
	 * @return void
	 * @api
	 */
	public function setName($name);

	/**
	 * Sets the auto-create status of the property.
	 *
	 * @param boolean $autoCreated a boolean.
	 * @return void
	 * @api
	 */
	public function setAutoCreated($autoCreated);

	/**
	 * Sets the mandatory status of the property.
	 *
	 * @param boolean $mandatory a boolean.
	 * @return void
	 * @api
	 */
	public function setMandatory($mandatory);

	/**
	 * Sets the on-parent-version status of the property.
	 *
	 * @param integer $opv an int constant member of OnParentVersionAction.
	 * @return void
	 * @api
	 */
	public function setOnParentVersion($opv);

	/**
	 * Sets the protected status of the property.
	 *
	 * @param boolean $protectedStatus a boolean.
	 * @return void
	 * @api
	 */
	public function setProtected($protectedStatus);

	/**
	 * Sets the required type of the property.
	 *
	 * @param integer $type an int constant member of PropertyType.
	 * @return void
	 * @api
	 */
	public function setRequiredType($type);

	/**
	 * Sets the value constraints of the property.
	 *
	 * @param array $constraints a String array.
	 * @return void
	 * @api
	 */
	public function setValueConstraints(array $constraints);

	/**
	 * Sets the default value (or values, in the case of a multi-value property)
	 * of the property.
	 *
	 * @param array $defaultValues a Value array.
	 * @return void
	 * @api
	 */
	public function setDefaultValues(array $defaultValues);

	/**
	 * Sets the multi-value status of the property.
	 *
	 * @param boolean $multiple a boolean.
	 * @return void
	 * @api
	 */
	public function setMultiple($multiple);

	/**
	 * Sets the queryable status of the property.
	 *
	 * @param array operators an array of String constants. See PropertyDefinition#getAvailableQueryOperators().
	 * @return void
	 * @api
	 */
	public function setAvailableQueryOperators(array $operators);

	/**
	 * Sets the full-text-searchable status of the property.
	 *
	 * @param boolean $fullTextSearchable a boolean.
	 * @return void
	 * @api
	 */
	public function setFullTextSearchable($fullTextSearchable);

	/**
	 * Sets the query-orderable status of the property.
	 *
	 * @param boolean $queryOrderable a boolean.
	 * @return void
	 * @api
	 */
	public function setQueryOrderable($queryOrderable);

}

?>