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
 * This interface defines two signatures of the visit method; one taking a
 * Node, the other a Property. When an object implementing this interface is
 * passed to Item->accept(ItemVisitor) the appropriate visit method is
 * automatically called, depending on whether the Item in question is a Node
 * or a Property. Different implementations of this interface can be written
 * for different purposes. It is, for example, possible for the visit(Node)
 * method to call accept on the children of the passed node and thus recurse
 * through the tree performing some operation on each Item.
 *
 * @version $Id$
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 * @license http://opensource.org/licenses/bsd-license.php Simplified BSD License
 * @api
 */
interface PHPCR_ItemVisitorInterface {

	/**
	 * This method is called when the ItemVisitor is passed to the accept method
	 * of a Node or Property. If this method throws an exception the visiting
	 * process is aborted.
	 *
	 * Note: you need to distinguish between Node and Property objects being
	 *       visited in your implementation.
	 *
	 * @param PHPCR_ItemInterface $item a node or property accepting this visitor
	 * @throws PHPCR_RepositoryException if an error occurs
	 * @api
	*/
	public function visit(PHPCR_ItemInterface $item);

}

?>