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
 * This interface encapsulates methods for the management of search queries.
 * Provides methods for the creation and retrieval of search queries.
 *
 * @version $Id$
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
interface PHPCR_Query_QueryManagerInterface {

	/**
	 * Creates a new query by specifying the query statement itself and the language
	 * in which the query is stated. The $language must be a string from among
	 * those returned by QueryManager.getSupportedQueryLanguages().
	 *
	 * @param string $statement
	 * @param string $language
	 * @return PHPCR_Query_QueryInterface a Query object
	 * @throws PHPCR_Query_InvalidQueryException if the query statement is syntactically invalid or the specified language is not supported
	 * @throws PHPCR_RepositoryException if another error occurs
	 * @api
	 */
	public function createQuery($statement, $language);

	/**
	 * Returns a QueryObjectModelFactory with which a JCR-JQOM query can be built
	 * programmatically.
	 *
	 * @return PHPCR_Query_QOM_QueryObjectModelFactoryInterface a QueryObjectModelFactory object
	 * @api
	 */
	public function getQOMFactory();

	/*
	 * Retrieves an existing persistent query.
	 *
	 * Persistent queries are created by first using QueryManager.createQuery to
	 * create a Query object and then calling Query.save to persist the query to
	 * a location in the workspace.
	 *
	 * @param PHPCR_NodeInterface $node a persisted query (that is, a node of type nt:query).
	 * @return PHPCR_Query_QueryInterface a Query object.
	 * @throws PHPCR_Query_InvalidQueryException If node is not a valid persisted query (that is, a node of type nt:query).
	 * @throws PHPCR_RepositoryException if another error occurs
	 * @api
	 */
	public function getQuery($node);

	/**
	 * Returns an array of strings representing all query languages supported by
	 * this repository. This set must include at least the strings represented
	 * by the constants Query.JCR_SQL2 and Query.JCR_JQOM. An implementation may
	 * also support other languages.
	 *
	 * @return array A string array.
	 * @throws PHPCR_RepositoryException if an error occurs.
	 * @api
	 */
	public function getSupportedQueryLanguages();

}

?>