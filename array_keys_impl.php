<?php

function array_keys_impl(array $array, $search_value = null, $strict = false)
{
	$ret = [];
	foreach ($array as $k => $v) {
		if (
			! $search_value ||
			$v === $search_value ||
			(! $strict && $v == $search_value)
		) {
			$ret[] = $k;
		}
	}
	return $ret;
}
