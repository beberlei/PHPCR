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
 * Each repository has a single, persistent namespace registry represented by
 * the NamespaceRegistry object, accessed via Workspace.getNamespaceRegistry().
 * The namespace registry contains the default prefixes of the registered
 * namespaces. The namespace registry may contain namespaces that are not used
 * in repository content, and there may be repository content with namespaces
 * that are not included n the registry.
 *
 * @version $Id$
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
interface PHPCR_NamespaceRegistryInterface {

	/**
	 * A constant for the predefined namespace prefix "jcr".
	 * @api
	 */
	const PREFIX_JCR = "jcr";

	/**
	 * A constant for the predefined namespace prefix "nt".
	 * @api
	 */
	const PREFIX_NT = "nt";

	/**
	 * A constant for the predefined namespace prefix "mix".
	 * @api
	 */
	const PREFIX_MIX = "mix";

	/**
	 * A constant for the predefined namespace prefix "xml".
	 * @api
	 */
	const PREFIX_XML = "xml";

	/**
	 * A constant for the predefined namespace prefix "" (the empty prefix).
	 * @api
	 */
	const PREFIX_EMPTY = "";

	/**
	 * A constant for the predefined namespace mapped by default to the prefix "jcr"
	 * @api
	 */
	const NAMESPACE_JCR = "http://www.jcp.org/jcr/1.0";

	/**
	 * A constant for the predefined namespace mapped by default to the prefix "nt"
	 * @api
	 */
	const NAMESPACE_NT = "http://www.jcp.org/jcr/nt/1.0";

	/**
	 * A constant for the predefined namespace mapped by default to the prefix "mix"
	 * @api
	 */
	const NAMESPACE_MIX = "http://www.jcp.org/jcr/mix/1.0";

	/**
	 * A constant for the predefined namespace mapped by default to the prefix "xml"
	 * @api
	 */
	const NAMESPACE_XML = "http://www.w3.org/XML/1998/namespace";

	/**
	 * A constant for the predefined namespace mapped by default to the prefix "" (the empty prefix)
	 * @api
	 */
	const NAMESPACE_EMPTY = "";

	/**
	 * Sets a one-to-one mapping between prefix and uri in the global namespace
	 * registry of this repository.
	 * Assigning a new prefix to a URI that already exists in the namespace
	 * registry erases the old prefix. In general this can almost always be
	 * done, though an implementation is free to prevent particular
	 * remappings by throwing a NamespaceException.
	 *
	 * On the other hand, taking a prefix that is already assigned to a URI
	 * and re-assigning it to a new URI in effect unregisters that URI.
	 * Therefore, the same restrictions apply to this operation as to
	 * NamespaceRegistry.unregisterNamespace:
	 * * Attempting to re-assign a built-in prefix (jcr, nt, mix, sv, xml,
	 *   or the empty prefix) to a new URI will throw a
	 *   PHPCR_NamespaceException.
	 * * Attempting to register a namespace with a prefix that begins with
	 *   the characters "xml" (in any combination of case) will throw a
	 *   PHPCR_NamespaceException.
	 * * An implementation may prevent the re-assignment of any other namespace
	 *   prefixes for implementation-specific reasons by throwing a
	 *   PHPCR_NamespaceException.
	 *
	 * @param string $prefix The prefix to be mapped.
	 * @param string $uri The URI to be mapped.
	 * @return void
	 * @throws PHPCR_NamespaceException If an attempt is made to re-assign a built-in prefix to a new URI or, to register a namespace with a prefix that begins with the characters "xml" (in any combination of case) or an attempt is made to perform a prefix re-assignment that is forbidden for implementation-specific reasons.
	 * @throws PHPCR_UnsupportedRepositoryOperationException if this repository does not support namespace registry changes.
	 * @throws PHPCR_AccessDeniedException if the current session does not have sufficient access to register the namespace.
	 * @throws PHPCR_RepositoryException if another error occurs.
	 * @api
	 */
	public function registerNamespace($prefix, $uri);


	/**
	 * Removes a namespace mapping from the registry. The following restriction
	 * apply:
	 * * Attempting to unregister a built-in namespace (jcr, nt, mix, sv, xml or
	 *   the empty namespace) will throw a PHPCR_NamespaceException.
	 * * An attempt to unregister a namespace that is not currently registered
	 *   will throw a PHPCR_NamespaceException.
	 * * An implementation may prevent the unregistering of any other namespace
	 *   for implementation-specific reasons by throwing a
	 *   PHPCR_NamespaceException.
	 *
	 * @param string $prefix The prefix of the mapping to be removed.
	 * @return void
	 * @throws PHPCR_NamespaceException unregister a built-in namespace or a namespace that is not currently registered or a namespace whose unregsitration is forbidden for implementation-specific reasons.
	 * @throws PHPCR_UnsupportedRepositoryOperationException if this repository does not support namespace registry changes.
	 * @throws PHPCR_AccessDeniedException if the current session does not have sufficient access to unregister the namespace.
	 * @throws PHPCR_RepositoryException if another error occurs.
	 * @api
	 */
	public function unregisterNamespace($prefix);

	/**
	 * Returns an array holding all currently registered prefixes.
	 *
	 * @return array a string array
	 * @throws PHPCR_RepositoryException if an error occurs.
	 * @api
	 */
	public function getPrefixes();

	/**
	 * Returns an array holding all currently registered URIs.
	 *
	 * @return array a string array
	 * @throws PHPCR_RepositoryException if an error occurs.
	 * @api
	 */
	public function getURIs();

	/**
	 * Returns the URI to which the given prefix is mapped.
	 *
	 * @param $prefix a string
	 * @return string a string
	 * @throws PHPCR_NamespaceException if a mapping with the specified prefix does not exist.
	 * @throws PHPCR_RepositoryException if another error occurs
	 * @api
	 */
	public function getURI($prefix);

	/**
	 * Returns the prefix which is mapped to the given uri.
	 *
	 * @param string $uri a string
	 * @return string a string
	 * @throws PHPCR_NamespaceException if a mapping with the specified uri does not exist.
	 * @throws PHPCR_RepositoryException if another error occurs
	 * @api
	 */
	public function getPrefix($uri);

}

?>