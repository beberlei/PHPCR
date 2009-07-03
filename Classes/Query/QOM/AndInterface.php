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
 * @package PHPCR
 * @subpackage Query
 * @version $Id: AndInterface.php 1811 2009-01-28 12:04:49Z robert $
 */

/**
 * Performs a logical conjunction of two other constraints.
 *
 * To satisfy the And constraint, a node-tuple must satisfy both constraint1 and
 * constraint2.
 *
 * @package PHPCR
 * @subpackage Query
 * @version $Id: AndInterface.php 1811 2009-01-28 12:04:49Z robert $
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
interface PHPCR_Query_QOM_AndInterface extends PHPCR_Query_QOM_ConstraintInterface {

	/**
	 * Gets the first constraint.
	 *
	 * @return PHPCR_Query_QOM_ConstraintInterface the constraint; non-null
	 */
	public function getConstraint1();

	/**
	 * Gets the second constraint.
	 *
	 * @return PHPCR_Query_QOM_ConstraintInterface the constraint; non-null
	 */
	public function getConstraint2();

}

?>