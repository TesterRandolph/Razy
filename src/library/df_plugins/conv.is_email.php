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
	if ('string' !== $this->dataType) {
		return false;
	}

	return false !== filter_var($this->value, FILTER_VALIDATE_EMAIL);
};
