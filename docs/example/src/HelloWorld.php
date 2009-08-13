<?php

	/**
	 * The Hello World class!
	 *
	 * @author Michiel Rook
	 * @version $Id: HelloWorld.php 526 2009-08-11 12:11:17Z mrook $
	 * @package hello.world
	 */
	class HelloWorld
	{
		public function foo($silent = true)
		{
			if ($silent) {
				return;
			}
			return 'foo';
		}

		function sayHello()
		{
			return "Hello World!";
		}
	};

?>