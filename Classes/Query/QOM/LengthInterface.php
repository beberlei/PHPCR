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
 * Evaluates to the length (or lengths, if multi-valued) of a property.
 *
 * The length should be computed as though the getLength method (or getLengths,
 * if multi-valued) of PHPCR_PropertyInterface were called.
 *
 * If propertyValue evaluates to null, the Length operand also evaluates to null.
 *
 * @version $Id$
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
interface PHPCR_Query_QOM_LengthInterface extends PHPCR_Query_QOM_DynamicOperandInterface {

	/**
	 * Gets the property value for which to compute the length.
	 *
	 * @return PHPCR_Query_QOM_PropertyValueInterface the property value; non-null
	 * @api
	 */
	public function getPropertyValue();

}

?>