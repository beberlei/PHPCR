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
 * A Property object represents the smallest granularity of content storage.
 * It has a single parent node and no children. A property consists of a name
 * and a value, or in the case of multi-value properties, a set of values all
 * of the same type. See Value.
 *
 * @version $Id$
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License, version 3 or later
 */
interface PHPCR_PropertyInterface extends PHPCR_ItemInterface {

	/**
	 * A constant for the property name jcr:primaryType (in extended form),
	 * declared in node type nt:base.
	 * @api
	 */
	const JCR_PRIMARY_TYPE = "{http://www.jcp.org/jcr/1.0}primaryType";

	/**
	 * A constant for the property name jcr:mixinTypes (in extended form),
	 * declared in node type nt:base.
	 * @api
	 */
	const JCR_MIXIN_TYPES = "{http://www.jcp.org/jcr/1.0}mixinTypes";

	/**
	 * A constant for the property name jcr:content (in extended form),
	 * declared in node type nt:linkedFile.
	 * Note, jcr:content is also the name of a child node declared in nt:file.
	 * @api
	 */
	const JCR_CONTENT = "{http://www.jcp.org/jcr/1.0}content";

	/**
	 * A constant for the property name jcr:data (in extended form),
	 * declared in node type nt:resource.
	 * @api
	 */
	const JCR_DATA = "{http://www.jcp.org/jcr/1.0}data";

	/**
	 * A constant for the property name jcr:protocol (in extended form),
	 * declared in node type nt:address.
	 * @api
	 */
	const JCR_PROTOCOL = "{http://www.jcp.org/jcr/1.0}protocol";

	/**
	 * A constant for the property name jcr:host (in extended form),
	 * declared in node type nt:address.
	 * @api
	 */
	const JCR_HOST = "{http://www.jcp.org/jcr/1.0}host";

	/**
	 * A constant for the property name jcr:port (in extended form),
	 * declared in node type nt:address.
	 * @api
	 */
	const JCR_PORT = "{http://www.jcp.org/jcr/1.0}port";

	/**
	 * A constant for the property name jcr:repository (in extended form),
	 * declared in node type nt:address.
	 * @api
	 */
	const JCR_REPOSITORY = "{http://www.jcp.org/jcr/1.0repository";

	/**
	 * A constant for the property name jcr:workspace (in extended form),
	 * declared in node type nt:address.
	 * @api
	 */
	const JCR_WORKSPACE = "{http://www.jcp.org/jcr/1.0}workspace";

	/**
	 * A constant for the property name jcr:path (in extended form),
	 * declared in node type nt:address.
	 * @api
	 */
	const JCR_PATH = "{http://www.jcp.org/jcr/1.0}path";

	/**
	 * A constant for the property name jcr:id (in extended form),
	 * declared in node type nt:address.
	 * @api
	 */
	const JCR_ID = "{http://www.jcp.org/jcr/1.0}id";

	/**
	 * A constant for the property name jcr:uuid (in extended form),
	 * declared in node type mix:referenceable.
	 * @api
	 */
	const JCR_UUID = "{http://www.jcp.org/jcr/1.0}uuid";

	/**
	 * A constant for the property name jcr:title (in extended form),
	 * declared in node types mix:title and nt:activity.
	 * @api
	 */
	const JCR_TITLE = "{http://www.jcp.org/jcr/1.0}title";

	/**
	 * A constant for the property name jcr:description (in extended form),
	 * declared in node type mix:title.
	 * @api
	 */
	const JCR_DESCRIPTION = "{http://www.jcp.org/jcr/1.0}description";

	/**
	 * A constant for the property name jcr:created (in extended form),
	 * declared in node types mix:created and nt:version.
	 * @api
	 */
	const JCR_CREATED = "{http://www.jcp.org/jcr/1.0}created";

	/**
	 * A constant for the property name jcr:createdBy (in extended form),
	 * declared in node type mix:created.
	 * @api
	 */
	const JCR_CREATED_BY = "{http://www.jcp.org/jcr/1.0}createdBy";

	/**
	 * A constant for the property name jcr:lastModified (in extended form),
	 * declared in node type mix:lastModified.
	 * @api
	 */
	const JCR_LAST_MODIFIED = "{http://www.jcp.org/jcr/1.0}lastModified";

	/**
	 * A constant for the property name jcr:lastModifiedBy (in extended form),
	 * declared in node type mix:lastModified.
	 * @api
	 */
	const JCR_LAST_MODIFIED_BY = "{http://www.jcp.org/jcr/1.0}lastModifiedBy";

	/**
	 * A constant for the property name jcr:language (in extended form),
	 * declared in node types mix:language and nt:query.
	 * @api
	 */
	const JCR_LANGUAGE = "{http://www.jcp.org/jcr/1.0}language";

	/**
	 * A constant for the property name jcr:mimeType (in extended form),
	 * declared in node type mix:mimeType.
	 * @api
	 */
	const JCR_MIMETYPE = "{http://www.jcp.org/jcr/1.0}mimeType";

	/**
	 * A constant for the property name jcr:encoding (in extended form),
	 * declared in node type mix:mimeType.
	 * @api
	 */
	const JCR_ENCODING = "{http://www.jcp.org/jcr/1.0}encoding";

	/**
	 * A constant for the property name jcr:nodeTypeName (in extended form),
	 * declared in node type nt:nodeType.
	 * @api
	 */
	const JCR_NODE_TYPE_NAME = "{http://www.jcp.org/jcr/1.0}nodeTypeName";

	/**
	 * A constant for the property name jcr:supertypes (in extended form),
	 * declared in node type nt:nodeType.
	 * @api
	 */
	const JCR_SUPERTYPES = "{http://www.jcp.org/jcr/1.0}supertypes";

	/**
	 * A constant for the property name jcr:isAbstract (in extended form),
	 * declared in node type nt:nodeType.
	 * @api
	 */
	const JCR_IS_ABSTRACT = "{http://www.jcp.org/jcr/1.0}isAbstract";

	/**
	 * A constant for the property name jcr:isMixin (in extended form),
	 * declared in node type nt:nodeType.
	 * @api
	 */
	const JCR_IS_MIXIN = "{http://www.jcp.org/jcr/1.0}isMixin";

	/**
	 * A constant for the property name jcr:hasOrderableChildNodes (in extended form),
	 * declared in node type nt:nodeType.
	 * @api
	 */
	const JCR_HAS_ORDERABLE_CHILD_NODES = "{http://www.jcp.org/jcr/1.0}hasOrderableChildNodes";

	/**
	 * A constant for the property name jcr:primaryItemName (in extended form),
	 * declared in node type nt:nodeType.
	 * @api
	 */
	const JCR_PRIMARY_ITEM_NAME = "{http://www.jcp.org/jcr/1.0}primaryItemName";

	/**
	 * A constant for the property name jcr:name (in extended form),
	 * declared in node types nt:propertyDefinition and nt:childNodeDefinition.
	 * @api
	 */
	const JCR_NAME = "{http://www.jcp.org/jcr/1.0}name";

	/**
	 * A constant for the property name jcr:autoCreated (in extended form),
	 * declared in node types nt:propertyDefinition and nt:childNodeDefinition.
	 * @api
	 */
	const JCR_AUTOCREATED = "{http://www.jcp.org/jcr/1.0}autoCreated";

	/**
	 * A constant for the property name jcr:mandatory (in extended form),
	 * declared in node types nt:propertyDefinition and nt:childNodeDefinition.
	 * @api
	 */
	const JCR_MANDATORY = "{http://www.jcp.org/jcr/1.0}mandatory";

	/**
	 * A constant for the property name jcr:protected (in extended form),
	 * declared in node types nt:propertyDefinition and nt:childNodeDefinition.
	 * @api
	 */
	const JCR_PROTECTED = "{http://www.jcp.org/jcr/1.0}protected";

	/**
	 * A constant for the property name jcr:onParentVersion (in extended form),
	 * declared in node types nt:propertyDefinition and nt:childNodeDefinition.
	 * @api
	 */
	const JCR_ON_PARENT_VERSION = "{http://www.jcp.org/jcr/1.0}onParentVersion";

	/**
	 * A constant for the property name jcr:requiredType (in extended form),
	 * declared in node type nt:propertyDefinition.
	 * @api
	 */
	const JCR_REQUIRED_TYPE = "{http://www.jcp.org/jcr/1.0}requiredType";

	/**
	 * A constant for the property name jcr:valueConstraints (in extended form),
	 * declared in node type nt:propertyDefinition.
	 * @api
	 */
	const JCR_VALUE_CONSTRAINTS = "{http://www.jcp.org/jcr/1.0}valueConstraints";

	/**
	 * A constant for the property name jcr:defaultValues (in extended form),
	 * declared in node type nt:propertyDefinition.
	 * @api
	 */
	const JCR_DEFAULT_VALUES = "{http://www.jcp.org/jcr/1.0}defaultValues";

	/**
	 * A constant for the property name jcr:multiple (in extended form),
	 * declared in node type nt:propertyDefinition.
	 * @api
	 */
	const JCR_MULTIPLE = "{http://www.jcp.org/jcr/1.0}multiple";

	/**
	 * A constant for the property name jcr:requiredPrimaryTypes (in extended form),
	 * declared in node type nt:childNodeDefinition.
	 * @api
	 */
	const JCR_REQUIRED_PRIMARY_TYPES = "{http://www.jcp.org/jcr/1.0}requiredPrimaryTypes";

	/**
	 * A constant for the property name jcr:defaultPrimaryType (in extended form),
	 * declared in node type nt:childNodeDefinition.
	 * @api
	 */
	const JCR_DEFAULT_PRIMARY_TYPE = "{http://www.jcp.org/jcr/1.0}defaultPrimaryType";

	/**
	 * A constant for the property name jcr:sameNameSiblings (in extended form),
	 * declared in node type nt:childNodeDefinition.
	 * @api
	 */
	const JCR_SAME_NAME_SIBLINGS = "{http://www.jcp.org/jcr/1.0}sameNameSiblings";

	/**
	 * A constant for the property name jcr:lockOwner (in extended form),
	 * declared in node type mix:lockable.
	 * @api
	 */
	const JCR_LOCK_OWNER = "{http://www.jcp.org/jcr/1.0}lockOwner";

	/**
	 * A constant for the property name jcr:lockIsDeep (in extended form),
	 * declared in node type mix:lockable.
	 * @api
	 */
	const JCR_LOCK_IS_DEEP = "{http://www.jcp.org/jcr/1.0}lockIsDeep";

	/**
	 * A constant for the property name jcr:lifecyclePolicy (in extended form),
	 * declared in node type mix:lifecycle.
	 * @api
	 */
	const JCR_LIFECYCLE_POLICY = "{http://www.jcp.org/jcr/1.0}lifecyclePolicy";

	/**
	 * A constant for the property name jcr:currentLifecycleState (in extended form),
	 * declared in node type mix:lifecycle.
	 * @api
	 */
	const JCR_CURRENT_LIFECYCLE_STATE = "{http://www.jcp.org/jcr/1.0}currentLifecycleState";

	/**
	 * A constant for the property name jcr:isCheckedOut (in extended form),
	 * declared in node type mix:simpleVersionable.
	 * @api
	 */
	const JCR_IS_CHECKED_OUT = "{http://www.jcp.org/jcr/1.0}isCheckedOut";

	/**
	 * A constant for the property name jcr:frozenPrimaryType (in extended form),
	 * declared in node type nt:frozenNode.
	 * @api
	 */
	const JCR_FROZEN_PRIMARY_TYPE = "{http://www.jcp.org/jcr/1.0}frozenPrimaryType";

	/**
	 * A constant for the property name jcr:frozenMixinTypes (in extended form),
	 * declared in node type nt:frozenNode.
	 * @api
	 */
	const JCR_FROZEN_MIXIN_TYPES = "{http://www.jcp.org/jcr/1.0}frozenMixinTypes";

	/**
	 * A constant for the property name jcr:frozenUuid (in extended form),
	 * declared in node type nt:frozenNode.
	 * @api
	 */
	const JCR_FROZEN_UUID = "{http://www.jcp.org/jcr/1.0}frozenUuid";

	/**
	 * A constant for the property name jcr:versionHistory (in extended form),
	 * declared in node type mix:versionable.
	 * @api
	 */
	const JCR_VERSION_HISTORY = "{http://www.jcp.org/jcr/1.0}versionHistory";

	/**
	 * A constant for the property name jcr:baseVersion (in extended form),
	 * declared in node type mix:versionable.
	 * @api
	 */
	const JCR_BASE_VERSION = "{http://www.jcp.org/jcr/1.0}baseVersion";

	/**
	 * A constant for the property name jcr:predecessors (in extended form),
	 * declared in node types mix:versionable and nt:version.
	 * @api
	 */
	const JCR_PREDECESSORS = "{http://www.jcp.org/jcr/1.0}predecessors";

	/**
	 * A constant for the property name jcr:mergeFailed (in extended form),
	 * declared in node type mix:versionable.
	 * @api
	 */
	const JCR_MERGE_FAILED = "{http://www.jcp.org/jcr/1.0}mergeFailed";

	/**
	 * A constant for the property name jcr:activity (in extended form),
	 * declared in node types mix:versionable and nt:version.
	 * @api
	 */
	const JCR_ACTIVITY = "{http://www.jcp.org/jcr/1.0}activity";

	/**
	 * A constant for the property name jcr:configuration (in extended form),
	 * declared in node type mix:versionable.
	 * @api
	 */
	const JCR_CONFIGURATION = "{http://www.jcp.org/jcr/1.0}configuration";

	/**
	 * A constant for the property name jcr:versionableUuid (in extended form),
	 * declared in node type nt:version.
	 * @api
	 */
	const JCR_VERSIONABLE_UUID = "{http://www.jcp.org/jcr/1.0}versionableUuid";

	/**
	 * A constant for the property name jcr:copiedFrom (in extended form),
	 * declared in node type nt:version.
	 * @api
	 */
	const JCR_COPIED_FROM = "{http://www.jcp.org/jcr/1.0}copiedFrom";

	/**
	 * A constant for the property name jcr:successors (in extended form),
	 * declared in node type nt:version.
	 * @api
	 */
	const JCR_SUCCESSORS = "{http://www.jcp.org/jcr/1.0}successors";

	/**
	 * A constant for the property name jcr:childVersionHistory (in extended form),
	 * declared in node type nt:versionedChild.
	 * @api
	 */
	const JCR_CHILD_VERSION_HISTORY = "{http://www.jcp.org/jcr/1.0}childVersionHistory";

	/**
	 * A constant for the property name jcr:root (in extended form),
	 * declared in node type nt:configuration.
	 * @api
	 */
	const JCR_ROOT = "{http://www.jcp.org/jcr/1.0}root";

	/**
	 * A constant for the property name jcr:statement (in extended form),
	 * declared in node type nt:query.
	 * @api
	 */
	const JCR_STATEMENT = "{http://www.jcp.org/jcr/1.0}statement";

	/**
	 * Sets the value of this property to value. If this property's property
	 * type is not constrained by the node type of its parent node, then the
	 * property type may be changed. If the property type is constrained, then a
	 * best-effort conversion is attempted.
	 *
	 * This method is a session-write and therefore requires a <code>save</code>
	 * to dispatch the change.
	 *
	 * For Node objects as value:
	 * Sets this REFERENCE OR WEAKREFERENCE property to refer to the specified
	 * node. If this property is not of type REFERENCE or WEAKREFERENCE or the
	 * specified node is not referenceable then a ValueFormatException is thrown.
	 *
	 * If value is an array:
	 * If this property is not multi-valued then a ValueFormatException is
	 * thrown immediately.
	 *
	 * Note: the Java API defines this method with multiple differing signatures.
	 *
	 * @param mixed $value The value to set
	 * @return void
	 * @throws PHPCR_ValueFormatException if the type or format of the specified value is incompatible with the type of this property.
	 * @throws PHPCR_Version_VersionException if this property belongs to a node that is read-only due to a checked-in node and this implementation performs this validation immediately.
	 * @throws PHPCR_Lock_LockException if a lock prevents the setting of the value and this implementation performs this validation immediately.
	 * @throws PHPCR_ConstraintViolationException if the change would violate a node-type or other constraint and this implementation performs this validation immediately.
	 * @throws PHPCR_RepositoryException if another error occurs.
	 * @api
	 */
	public function setValue($value);

	/**
	 * Returns the value of this property as a Value object.
	 *
	 * The object returned is a copy of the stored value and is immutable.
	 *
	 * @return PHPCR_ValueInterface the value
	 * @throws PHPCR_ValueFormatException if the property is multi-valued.
	 * @throws PHPCR_RepositoryException if another error occurs.
	 * @api
	 */
	public function getValue();

	/**
	 * Returns an array of all the values of this property. Used to access
	 * multi-value properties. If the property is single-valued, this method
	 * throws a ValueFormatException. The array returned is a copy of the
	 * stored values, so changes to it are not reflected in internal storage.
	 *
	 * @return array of PHPCR_ValueInterface
	 * @throws PHPCR_ValueFormatException if the property is single-valued.
	 * @throws PHPCR_RepositoryException if another error occurs.
	 * @api
	 */
	public function getValues();

	/**
	 * Returns a String representation of the value of this property. A
	 * shortcut for Property.getValue().getString(). See Value.
	 *
	 * @return string A string representation of the value of this property.
	 * @throws PHPCR_ValueFormatException if conversion to a String is not possible or if the property is multi-valued.
	 * @throws PHPCR_RepositoryException if another error occurs.
	 * @api
	 */
	public function getString();

	/**
	 * Returns a Binary representation of the value of this property. A
	 * shortcut for Property.getValue().getBinary(). See Value.
	 *
	 * @return PHPCR_BinaryInterface A Binary representation of the value of this property.
	 * @throws PHPCR_ValueFormatException if the property is multi-valued.
	 * @throws PHPCR_RepositoryException if another error occurs
	 * @api
	 */
	public function getBinary();

	/**
	 * Returns an integer representation of the value of this property. A shortcut
	 * for Property.getValue().getLong(). See Value.
	 *
	 * @return integer An integer representation of the value of this property.
	 * @throws PHPCR_ValueFormatException if conversion to a long is not possible or if the property is multi-valued.
	 * @throws PHPCR_RepositoryException if another error occurs
	 * @api
	 */
	public function getLong();

	/**
	 * Returns a double representation of the value of this property. A
	 * shortcut for Property.getValue().getDouble(). See Value.
	 *
	 * @return float A float representation of the value of this property.
	 * @throws PHPCR_ValueFormatException if conversion to a double is not possible or if the property is multi-valued.
	 * @throws PHPCR_RepositoryException if another error occurs
	 * @api
	 */
	public function getDouble();

	/**
	 * Returns a BigDecimal representation of the value of this property. A
	 * shortcut for Property.getValue().getDecimal(). See Value.
	 *
	 * @return float A float representation of the value of this property.
	 * @throws PHPCR_ValueFormatException if conversion to a BigDecimal is not possible or if the property is multi-valued.
	 * @throws PHPCR_RepositoryException if another error occurs
	 * @api
	 */
	public function getDecimal();

	/**
	 * Returns a DateTime representation of the value of this property. A
	 * shortcut for Property.getValue().getDate(). See Value.
	 *
	 * @return DateTime A date representation of the value of this property.
	 * @throws PHPCR_ValueFormatException if conversion to a string is not possible or if the property is multi-valued.
	 * @throws PHPCR_RepositoryException if another error occurs
	 * @api
	 */
	public function getDate();

	/**
	 * Returns a boolean representation of the value of this property. A
	 * shortcut for Property.getValue().getBoolean(). See Value.
	 *
	 * @return boolean A boolean representation of the value of this property.
	 * @throws PHPCR_ValueFormatException if conversion to a boolean is not possible or if the property is multi-valued.
	 * @throws PHPCR_RepositoryException if another error occurs
	 * @api
	 */
	public function getBoolean();

	/**
	 * If this property is of type REFERENCE, WEAKREFERENCE or PATH (or
	 * convertible to one of these types) this method returns the Node to
	 * which this property refers.
	 * If this property is of type PATH and it contains a relative path, it is
	 * interpreted relative to the parent node of this property. For example "."
	 * refers to the parent node itself, ".." to the parent of the parent node
	 * and "foo" to a sibling node of this property.
	 *
	 * @return PHPCR_NodeInterface the referenced Node
	 * @throws PHPCR_ValueFormatException if this property cannot be converted to a referring type (REFERENCE, WEAKREFERENCE or PATH), if the property is multi-valued or if this property is a referring type but is currently part of the frozen state of a version in version storage.
	 * @throws PHPCR_ItemNotFoundException If this property is of type PATH or WEAKREFERENCE and no target node accessible by the current Session exists in this workspace. Note that this applies even if the property is a PATH and a property exists at the specified location. To dereference to a target property (as opposed to a target node), the method Property.getProperty is used.
	 * @throws PHPCR_RepositoryException if another error occurs.
	 * @api
	 */
	public function getNode();

	/**
	 * If this property is of type PATH (or convertible to this type) this
	 * method returns the Property to which this property refers.
	 * If this property contains a relative path, it is interpreted relative
	 * to the parent node of this property. Therefore, when resolving such a
	 * relative path, the segment "." refers to the parent node itself, ".." to
	 * the parent of the parent node and "foo" to a sibling property of this
	 * property or this property itself.
	 *
	 * For example, if this property is located at /a/b/c and it has a value of
	 * "../d" then this method will return the property at /a/d if such exists.
	 *
	 * @return PHPCR_PropertyInterface the referenced property
	 * @throws PHPCR_ValueFormatException if this property cannot be converted to a PATH, if the property is multi-valued or if this property is a referring type but is currently part of the frozen state of a version in version storage.
	 * @throws PHPCR_ItemNotFoundException If no property accessible by the current Session exists in this workspace at the specified path. Note that this applies even if a node exists at the specified location. To dereference to a target node, the method Property.getNode is used.
	 * @throws PHPCR_RepositoryException if another error occurs
	 * @api
	 */
	public function getProperty();

	/**
	 * Returns the length of the value of this property.
	 *
	 * For a BINARY property, getLength returns the number of bytes.
	 * For other property types, getLength returns the same value that would be
	 * returned by calling strlen() on the value when it has been converted to a
	 * STRING according to standard JCR propety type conversion.
	 *
	 * Returns -1 if the implementation cannot determine the length.
	 *
	 * @return integer an integer.
	 * @throws PHPCR_ValueFormatException if this property is multi-valued.
	 * @throws PHPCR_RepositoryException if another error occurs.
	 * @api
	 */
	public function getLength();

	/**
	 * Returns an array holding the lengths of the values of this (multi-value)
	 * property in bytes where each is individually calculated as described in
	 * getLength().
	 *
	 * @return array an array of lengths
	 * @throws PHPCR_ValueFormatException if this property is single-valued.
	 * @throws PHPCR_RepositoryException if another error occurs.
	 * @api
	 */
	public function getLengths();

	/**
	 * Returns the property definition that applies to this property. In some
	 * cases there may appear to be more than one definition that could apply
	 * to this node. However, it is assumed that upon creation or change of
	 * this property, a single particular definition is chosen by the
	 * implementation. It is that definition that this method returns. How this
	 * governing definition is selected upon property creation or change from
	 * among others which may have been applicable is an implementation issue
	 * and is not covered by this specification.
	 *
	 * @return PHPCR_NodeType_PropertyDefinitionInterface a PropertyDefinition object.
	 * @throws PHPCR_RepositoryException if an error occurs.
	 * @api
	 */
	public function getDefinition();

	/**
	 * Returns the type of this Property. One of:
	 * * PropertyType.STRING
	 * * PropertyType.BINARY
	 * * PropertyType.DATE
	 * * PropertyType.DOUBLE
	 * * PropertyType.LONG
	 * * PropertyType.BOOLEAN
	 * * PropertyType.NAME
	 * * PropertyType.PATH
	 * * PropertyType.REFERENCE
	 * * PropertyType.WEAKREFERENCE
	 * * PropertyType.URI
	 *
	 * The type returned is that which was set at property creation. Note that
	 * for some property p, the type returned by p.getType() will differ from
	 * the type returned by p.getDefinition.getRequiredType() only in the case
	 * where the latter returns UNDEFINED. The type of a property instance is
	 * never UNDEFINED (it must always have some actual type).
	 *
	 * @return integer an int
	 * @throws PHPCR_RepositoryException if an error occurs
	 * @api
	 */
	public function getType();

	/**
	 * Returns TRUE if this property is multi-valued and FALSE if this property
	 * is single-valued.
	 *
	 * @return boolean TRUE if this property is multi-valued; FALSE otherwise.
	 * @throws PHPCR_RepositoryException if an error occurs.
	 * @api
	 */
	public function isMultiple();

}

?>