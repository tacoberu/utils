<?php
/*
 * Copyright © 2000-2016 ANTEE s.r.o., All rights reserved. Confidential.
 */

namespace Nette;

/**
 * The exception that indicates assertion error.
 */
class AssertionException extends \Exception
{
}

/**
 * The exception that is thrown when an argument does not match with the expected value.
 */
class InvalidArgumentException extends \InvalidArgumentException
{
}

/**
 * The exception that is thrown when a method call is invalid for the object's
 * current state, method has been invoked at an illegal or inappropriate time.
 */
class InvalidStateException extends \RuntimeException
{
}

/**
 * The exception that is thrown when static class is instantiated.
 */
class StaticClassException extends \LogicException
{
}

/**
 * The exception that is thrown when an I/O error occurs.
 */
class IOException extends \RuntimeException
{
}
/**
 * The exception that is thrown when accessing a file that does not exist on disk.
 */
class FileNotFoundException extends IOException
{
}
