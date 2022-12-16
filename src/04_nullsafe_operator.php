<?php
$object = json_decode('{
	"user": {
		"address": null,
		"taxData": {
			"taxID": "33"
		}
	}
}', false);

echo $object?->notExists?->some?->property ?? 'not exists'; // not exists
echo "\n";
echo $object?->user?->address?->city ?? 'no city'; // no city
echo "\n";
echo $object?->user?->taxData?->taxID ?? 'no tax id'; // 33
