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

class BuildInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\BuildInfo';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'Docker\\API\\Model\\BuildInfo';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Docker\API\Model\BuildInfo();
        if (property_exists($data, 'id') && $data->{'id'} !== null) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'stream') && $data->{'stream'} !== null) {
            $object->setStream($data->{'stream'});
        }
        if (property_exists($data, 'error') && $data->{'error'} !== null) {
            $object->setError($data->{'error'});
        }
        if (property_exists($data, 'errorDetail') && $data->{'errorDetail'} !== null) {
            $object->setErrorDetail($this->denormalizer->denormalize($data->{'errorDetail'}, 'Docker\\API\\Model\\ErrorDetail', 'json', $context));
        }
        if (property_exists($data, 'status') && $data->{'status'} !== null) {
            $object->setStatus($data->{'status'});
        }
        if (property_exists($data, 'progress') && $data->{'progress'} !== null) {
            $object->setProgress($data->{'progress'});
        }
        if (property_exists($data, 'progressDetail') && $data->{'progressDetail'} !== null) {
            $object->setProgressDetail($this->denormalizer->denormalize($data->{'progressDetail'}, 'Docker\\API\\Model\\ProgressDetail', 'json', $context));
        }
        if (property_exists($data, 'aux') && $data->{'aux'} !== null) {
            $object->setAux($this->denormalizer->denormalize($data->{'aux'}, 'Docker\\API\\Model\\ImageID', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        }
        if (null !== $object->getStream()) {
            $data->{'stream'} = $object->getStream();
        }
        if (null !== $object->getError()) {
            $data->{'error'} = $object->getError();
        }
        if (null !== $object->getErrorDetail()) {
            $data->{'errorDetail'} = $this->normalizer->normalize($object->getErrorDetail(), 'json', $context);
        }
        if (null !== $object->getStatus()) {
            $data->{'status'} = $object->getStatus();
        }
        if (null !== $object->getProgress()) {
            $data->{'progress'} = $object->getProgress();
        }
        if (null !== $object->getProgressDetail()) {
            $data->{'progressDetail'} = $this->normalizer->normalize($object->getProgressDetail(), 'json', $context);
        }
        if (null !== $object->getAux()) {
            $data->{'aux'} = $this->normalizer->normalize($object->getAux(), 'json', $context);
        }

        return $data;
    }
}
