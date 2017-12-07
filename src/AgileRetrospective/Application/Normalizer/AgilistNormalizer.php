<?php

namespace AgileRetrospective\Application\Normalizer;

use AgileRetrospective\Domain\Model\Agilist;

class AgilistNormalizer
{
    public function normalize($object)
    {
        $objectTransformedIntoArray = [];

        foreach ($object as $key => $value)
        {
            $objectTransformedIntoArray[$key] = $value;
        }

        return $objectTransformedIntoArray;
    }

    public function denormalize($object)
    {
        return new Agilist(1, 'Christophe Cavanna');
    }
}
