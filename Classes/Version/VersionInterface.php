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
 * @subpackage Version
 * @version $Id: VersionInterface.php 1811 2009-01-28 12:04:49Z robert $
 */

/**
 * A Version object wraps an nt:version node. It provides convenient access to
 * version information.
 *
 * @package PHPCR
 * @subpackage Version
 * @version $Id: VersionInterface.php 1811 2009-01-28 12:04:49Z robert $
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
interface PHPCR_Version_VersionInterface extends PHPCR_NodeInterface {

	/**
	 * Returns the VersionHistory that contains this Version
	 *
	 * @return PHPCR_Version_VersionHistoryInterface the VersionHistory that contains this Version
	 * @throws PHPCR_RepositoryException if an error occurs
	 */
	public function getContainingHistory();

	/**
	 * Returns the date this version was created. This corresponds to the
	 * value of the jcr:created property in the nt:version node that represents
	 * this version.
	 *
	 * @return DateTime a DateTime object
	 * @throws PHPCR_RepositoryException - if an error occurs
	 */
	public function getCreated();

	/**
	 * Assuming that this Version object was acquired through a Workspace W and
	 * is within the VersionHistory H, this method returns the successor of this
	 * version along the same line of descent as is returned by
	 * H.getAllLinearVersions() where H was also acquired through W.
	 *
	 * Note that under simple versioning the behavior of this method is equivalent
	 * to getting the unique successor (if any) of this version.
	 *
	 * @see VersionHistory#getAllLinearVersions()
	 * @return PHPCR_VersionInterface a Version or NULL if no linear successor exists.
	 * @throws PHPCR_RepositoryException if an error occurs.
	 */
	public function getLinearSuccessor();

	/**
	 * Returns the successor versions of this version. This corresponds to
	 * returning all the nt:version nodes referenced by the jcr:successors
	 * multi-value property in the nt:version node that represents this version.
	 *
	 * @return array of PHPCR_Version_VersionInterface
	 * @throws PHPCR_RepositoryException if an error occurs
	 */
	public function getSuccessors();

	/**
	 * Assuming that this Version object was acquired through a Workspace W and
	 * is within the VersionHistory H, this method returns the predecessor of
	 * this version along the same line of descent as is returned by
	 * H.getAllLinearVersions() where H was also acquired through W.
	 *
	 * Note that under simple versioning the behavior of this method is equivalent
	 * to getting the unique predecessor (if any) of this version.
	 *
	 * @see VersionHistory#getAllLinearVersions()
	 * @return PHPCR_Version_VersionInterface a Version or NULL if no linear predecessor exists.
	 * @throws PHPCR_RepositoryException if an error occurs.
	 */
	public function getLinearPredecessor();

	/**
	 * In both simple and full versioning repositories, this method returns the
	 * predecessor versions of this version. This corresponds to returning all
	 * the nt:version nodes whose jcr:successors property includes a reference
	 * to the nt:version node that represents this version.
	 *
	 * @return array of PHPCR_Version_VersionInterface
	 * @throws PHPCR_RepositoryException if an error occurs
	 */
	public function getPredecessors();

	/**
	 * Returns the frozen node of this version.
	 *
	 * @return PHPCR_NodeInterface a Node object
	 * @throws PHPCR_RepositoryException if an error occurs
	 */
	public function getFrozenNode();

}

?>