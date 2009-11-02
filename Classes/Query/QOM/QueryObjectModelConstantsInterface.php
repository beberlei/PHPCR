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
 * Defines constants used in the query object model.
 *
 * @version $Id$
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 * @license http://opensource.org/licenses/bsd-license.php Simplified BSD License
 * @api
 */
interface PHPCR_Query_QOM_QueryObjectModelConstantsInterface {

	/**
	 * An inner join.
	 * @api
	*/
	const JCR_JOIN_TYPE_INNER = '{http://www.jcp.org/jcr/1.0}joinTypeInner';

	/**
	 * A left-outer join.
	 * @api
	*/
	const JCR_JOIN_TYPE_LEFT_OUTER = '{http://www.jcp.org/jcr/1.0}joinTypeLeftOuter';

	/**
	 * A right-outer join.
	 * @api
	*/
	const JCR_JOIN_TYPE_RIGHT_OUTER = '{http://www.jcp.org/jcr/1.0}joinTypeRightOuter';

	/**
	 * The '=' comparison operator.
	 * @api
	*/
	const JCR_OPERATOR_EQUAL_TO = '{http://www.jcp.org/jcr/1.0}operatorEqualTo';

	/**
	 * The '!=' comparison operator.
	 * @api
	*/
	const JCR_OPERATOR_NOT_EQUAL_TO = '{http://www.jcp.org/jcr/1.0}operatorNotEqualTo';

	/**
	 * The '<' comparison operator.
	 * @api
	*/
	const JCR_OPERATOR_LESS_THAN = '{http://www.jcp.org/jcr/1.0}operatorLessThan';

	/**
	 * The '<=' comparison operator.
	 * @api
	*/
	const JCR_OPERATOR_LESS_THAN_OR_EQUAL_TO = '{http://www.jcp.org/jcr/1.0}operatorLessThanOrEqualTo';

	/**
	 * The '>' comparison operator.
	 * @api
	*/
	const JCR_OPERATOR_GREATER_THAN = '{http://www.jcp.org/jcr/1.0}operatorGreaterThan';

	/**
	 * The '>=' comparison operator.
	 * @api
	*/
	const JCR_OPERATOR_GREATER_THAN_OR_EQUAL_TO = '{http://www.jcp.org/jcr/1.0}operatorGreaterThanOrEqualTo';

	/**
	 * The 'like' comparison operator.
	 * @api
	*/
	const JCR_OPERATOR_LIKE = '{http://www.jcp.org/jcr/1.0}operatorLike';

	/**
	 * Ascending order.
	 * @api
	*/
	const JCR_ORDER_ASCENDING = '{http://www.jcp.org/jcr/1.0}orderAscending';

	/**
	 * Descending order.
	 * @api
	*/
	const JCR_ORDER_DESCENDING = '{http://www.jcp.org/jcr/1.0}orderDescending';

}

?>