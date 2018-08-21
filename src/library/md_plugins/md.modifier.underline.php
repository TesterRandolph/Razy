<?php

/*
 * This file is part of RazyFramework.
 *
 * (c) Ray Fung <hello@rayfung.hk>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

return [
	'pattern'  => '__',
	'callback' => function ($text) {
		return '<u>' . $this->parseModifier($text) . '</u>';
	},
];
