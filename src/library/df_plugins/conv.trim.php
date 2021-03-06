<?php

/*
 * This file is part of RazyFramework.
 *
 * (c) Ray Fung <hello@rayfung.hk>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

return function () {
	$this->chainable = true;
	if ('string' !== $this->dataType && 'integer' !== $this->dataType && 'double' !== $this->dataType) {
		$this->value = print_r($this->value, true);
	}
	
	$this->value = trim($this->value);
};
