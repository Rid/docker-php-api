<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class PluginConfigInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\PluginConfigInterface';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Docker\\API\\Model\\PluginConfigInterface';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Docker\API\Model\PluginConfigInterface();
        if (property_exists($data, 'Types') && $data->{'Types'} !== null) {
            $values = [];
            foreach ($data->{'Types'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Docker\\API\\Model\\PluginInterfaceType', 'json', $context);
            }
            $object->setTypes($values);
        }
        if (property_exists($data, 'Socket') && $data->{'Socket'} !== null) {
            $object->setSocket($data->{'Socket'});
        }
        if (property_exists($data, 'ProtocolScheme') && $data->{'ProtocolScheme'} !== null) {
            $object->setProtocolScheme($data->{'ProtocolScheme'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getTypes()) {
            $values = [];
            foreach ($object->getTypes() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'Types'} = $values;
        }
        if (null !== $object->getSocket()) {
            $data->{'Socket'} = $object->getSocket();
        }
        if (null !== $object->getProtocolScheme()) {
            $data->{'ProtocolScheme'} = $object->getProtocolScheme();
        }

        return $data;
    }
}
