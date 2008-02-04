<?php
declare(encoding = 'utf-8');

/*                                                                        *
 * This script is part of the TYPO3 project - inspiring people to share!  *
 *                                                                        *
 * TYPO3 is free software; you can redistribute it and/or modify it under *
 * the terms of the GNU General Public License version 2 as published by  *
 * the Free Software Foundation.                                          *
 *                                                                        *
 * This script is distributed in the hope that it will be useful, but     *
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHAN-    *
 * TABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General      *
 * Public License for more details.                                       *
 *                                                                        */

/**
 * A NodeIterator interface
 *
 * @package		phpCR
 * @version 	$Id$
 * @copyright	Copyright belongs to the respective authors
 * @license		http://opensource.org/licenses/gpl-license.php GNU Public License, version 2
 */
interface T3_phpCR_NodeIteratorInterface extends T3_phpCR_RangeIteratorInterface {

	/**
	 * Returns the next Node in the iteration.
	 * 
	 * @return T3_phpCR_NodeInterface
	 * @throws T3_phpCR_NoSuchElementException if the iterator contains no more elements.
	 */
	public function nextNode();
	
}

?>