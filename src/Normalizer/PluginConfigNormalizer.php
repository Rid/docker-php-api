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

class PluginConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\PluginConfig';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Docker\API\Model\PluginConfig;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Docker\API\Model\PluginConfig();
        if (property_exists($data, 'DockerVersion') && $data->{'DockerVersion'} !== null) {
            $object->setDockerVersion($data->{'DockerVersion'});
        }
        if (property_exists($data, 'Description') && $data->{'Description'} !== null) {
            $object->setDescription($data->{'Description'});
        }
        if (property_exists($data, 'Documentation') && $data->{'Documentation'} !== null) {
            $object->setDocumentation($data->{'Documentation'});
        }
        if (property_exists($data, 'Interface') && $data->{'Interface'} !== null) {
            $object->setInterface($this->denormalizer->denormalize($data->{'Interface'}, 'Docker\\API\\Model\\PluginConfigInterface', 'json', $context));
        }
        if (property_exists($data, 'Entrypoint') && $data->{'Entrypoint'} !== null) {
            $values = [];
            foreach ($data->{'Entrypoint'} as $value) {
                $values[] = $value;
            }
            $object->setEntrypoint($values);
        }
        if (property_exists($data, 'WorkDir') && $data->{'WorkDir'} !== null) {
            $object->setWorkDir($data->{'WorkDir'});
        }
        if (property_exists($data, 'User') && $data->{'User'} !== null) {
            $object->setUser($this->denormalizer->denormalize($data->{'User'}, 'Docker\\API\\Model\\PluginConfigUser', 'json', $context));
        }
        if (property_exists($data, 'Network') && $data->{'Network'} !== null) {
            $object->setNetwork($this->denormalizer->denormalize($data->{'Network'}, 'Docker\\API\\Model\\PluginConfigNetwork', 'json', $context));
        }
        if (property_exists($data, 'Linux') && $data->{'Linux'} !== null) {
            $object->setLinux($this->denormalizer->denormalize($data->{'Linux'}, 'Docker\\API\\Model\\PluginConfigLinux', 'json', $context));
        }
        if (property_exists($data, 'PropagatedMount') && $data->{'PropagatedMount'} !== null) {
            $object->setPropagatedMount($data->{'PropagatedMount'});
        }
        if (property_exists($data, 'IpcHost') && $data->{'IpcHost'} !== null) {
            $object->setIpcHost($data->{'IpcHost'});
        }
        if (property_exists($data, 'PidHost') && $data->{'PidHost'} !== null) {
            $object->setPidHost($data->{'PidHost'});
        }
        if (property_exists($data, 'Mounts') && $data->{'Mounts'} !== null) {
            $values_1 = [];
            foreach ($data->{'Mounts'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Docker\\API\\Model\\PluginMount', 'json', $context);
            }
            $object->setMounts($values_1);
        }
        if (property_exists($data, 'Env') && $data->{'Env'} !== null) {
            $values_2 = [];
            foreach ($data->{'Env'} as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Docker\\API\\Model\\PluginEnv', 'json', $context);
            }
            $object->setEnv($values_2);
        }
        if (property_exists($data, 'Args') && $data->{'Args'} !== null) {
            $object->setArgs($this->denormalizer->denormalize($data->{'Args'}, 'Docker\\API\\Model\\PluginConfigArgs', 'json', $context));
        }
        if (property_exists($data, 'rootfs') && $data->{'rootfs'} !== null) {
            $object->setRootfs($this->denormalizer->denormalize($data->{'rootfs'}, 'Docker\\API\\Model\\PluginConfigRootfs', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getDockerVersion()) {
            $data->{'DockerVersion'} = $object->getDockerVersion();
        }
        if (null !== $object->getDescription()) {
            $data->{'Description'} = $object->getDescription();
        }
        if (null !== $object->getDocumentation()) {
            $data->{'Documentation'} = $object->getDocumentation();
        }
        if (null !== $object->getInterface()) {
            $data->{'Interface'} = $this->normalizer->normalize($object->getInterface(), 'json', $context);
        }
        if (null !== $object->getEntrypoint()) {
            $values = [];
            foreach ($object->getEntrypoint() as $value) {
                $values[] = $value;
            }
            $data->{'Entrypoint'} = $values;
        }
        if (null !== $object->getWorkDir()) {
            $data->{'WorkDir'} = $object->getWorkDir();
        }
        if (null !== $object->getUser()) {
            $data->{'User'} = $this->normalizer->normalize($object->getUser(), 'json', $context);
        }
        if (null !== $object->getNetwork()) {
            $data->{'Network'} = $this->normalizer->normalize($object->getNetwork(), 'json', $context);
        }
        if (null !== $object->getLinux()) {
            $data->{'Linux'} = $this->normalizer->normalize($object->getLinux(), 'json', $context);
        }
        if (null !== $object->getPropagatedMount()) {
            $data->{'PropagatedMount'} = $object->getPropagatedMount();
        }
        if (null !== $object->getIpcHost()) {
            $data->{'IpcHost'} = $object->getIpcHost();
        }
        if (null !== $object->getPidHost()) {
            $data->{'PidHost'} = $object->getPidHost();
        }
        if (null !== $object->getMounts()) {
            $values_1 = [];
            foreach ($object->getMounts() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'Mounts'} = $values_1;
        }
        if (null !== $object->getEnv()) {
            $values_2 = [];
            foreach ($object->getEnv() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data->{'Env'} = $values_2;
        }
        if (null !== $object->getArgs()) {
            $data->{'Args'} = $this->normalizer->normalize($object->getArgs(), 'json', $context);
        }
        if (null !== $object->getRootfs()) {
            $data->{'rootfs'} = $this->normalizer->normalize($object->getRootfs(), 'json', $context);
        }

        return $data;
    }
}
