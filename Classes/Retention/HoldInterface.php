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
 * @subpackage Retention
 * @version $Id: HoldInterface.php 2191 2009-05-07 19:49:06Z k-fish $
 */

/**
 * Hold represents a hold that can be applied to an existing node in order to
 * prevent the node from being modified or removed. The format and interpretation
 * of the name are not specified. They are application-dependent.
 *
 * If isDeep() is true, the hold applies to the node and its entire subgraph.
 * Otherwise the hold applies to the node and its properties only.
 *
 * @package PHPCR
 * @subpackage Retention
 * @version $Id: HoldInterface.php 2191 2009-05-07 19:49:06Z k-fish $
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
interface PHPCR_Retention_HoldInterface {

	/**
	 * Returns true if this Hold is deep.
	 *
	 * @return boolean TRUE if this Hold is deep.
	 * @throws PHPCR_RepositoryException if an error occurs.
	 */
	public function isDeep();

	/**
	 * Returns the name of this Hold. A JCR name.
	 *
	 * @return string the name of this Hold. A JCR name.
	 * @throws PHPCR_RepositoryException if an error occurs.
	 */
	public function getName();

}
?>