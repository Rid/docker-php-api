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

class HostConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Docker\\API\\Model\\HostConfig';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \Docker\API\Model\HostConfig;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        $object = new \Docker\API\Model\HostConfig();
        if (property_exists($data, 'CpuShares') && $data->{'CpuShares'} !== null) {
            $object->setCpuShares($data->{'CpuShares'});
        }
        if (property_exists($data, 'Memory') && $data->{'Memory'} !== null) {
            $object->setMemory($data->{'Memory'});
        }
        if (property_exists($data, 'CgroupParent') && $data->{'CgroupParent'} !== null) {
            $object->setCgroupParent($data->{'CgroupParent'});
        }
        if (property_exists($data, 'BlkioWeight') && $data->{'BlkioWeight'} !== null) {
            $object->setBlkioWeight($data->{'BlkioWeight'});
        }
        if (property_exists($data, 'BlkioWeightDevice') && $data->{'BlkioWeightDevice'} !== null) {
            $values = [];
            foreach ($data->{'BlkioWeightDevice'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Docker\\API\\Model\\ResourcesBlkioWeightDeviceItem', 'json', $context);
            }
            $object->setBlkioWeightDevice($values);
        }
        if (property_exists($data, 'BlkioDeviceReadBps') && $data->{'BlkioDeviceReadBps'} !== null) {
            $values_1 = [];
            foreach ($data->{'BlkioDeviceReadBps'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Docker\\API\\Model\\ThrottleDevice', 'json', $context);
            }
            $object->setBlkioDeviceReadBps($values_1);
        }
        if (property_exists($data, 'BlkioDeviceWriteBps') && $data->{'BlkioDeviceWriteBps'} !== null) {
            $values_2 = [];
            foreach ($data->{'BlkioDeviceWriteBps'} as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Docker\\API\\Model\\ThrottleDevice', 'json', $context);
            }
            $object->setBlkioDeviceWriteBps($values_2);
        }
        if (property_exists($data, 'BlkioDeviceReadIOps') && $data->{'BlkioDeviceReadIOps'} !== null) {
            $values_3 = [];
            foreach ($data->{'BlkioDeviceReadIOps'} as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Docker\\API\\Model\\ThrottleDevice', 'json', $context);
            }
            $object->setBlkioDeviceReadIOps($values_3);
        }
        if (property_exists($data, 'BlkioDeviceWriteIOps') && $data->{'BlkioDeviceWriteIOps'} !== null) {
            $values_4 = [];
            foreach ($data->{'BlkioDeviceWriteIOps'} as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'Docker\\API\\Model\\ThrottleDevice', 'json', $context);
            }
            $object->setBlkioDeviceWriteIOps($values_4);
        }
        if (property_exists($data, 'CpuPeriod') && $data->{'CpuPeriod'} !== null) {
            $object->setCpuPeriod($data->{'CpuPeriod'});
        }
        if (property_exists($data, 'CpuQuota') && $data->{'CpuQuota'} !== null) {
            $object->setCpuQuota($data->{'CpuQuota'});
        }
        if (property_exists($data, 'CpuRealtimePeriod') && $data->{'CpuRealtimePeriod'} !== null) {
            $object->setCpuRealtimePeriod($data->{'CpuRealtimePeriod'});
        }
        if (property_exists($data, 'CpuRealtimeRuntime') && $data->{'CpuRealtimeRuntime'} !== null) {
            $object->setCpuRealtimeRuntime($data->{'CpuRealtimeRuntime'});
        }
        if (property_exists($data, 'CpusetCpus') && $data->{'CpusetCpus'} !== null) {
            $object->setCpusetCpus($data->{'CpusetCpus'});
        }
        if (property_exists($data, 'CpusetMems') && $data->{'CpusetMems'} !== null) {
            $object->setCpusetMems($data->{'CpusetMems'});
        }
        if (property_exists($data, 'Devices') && $data->{'Devices'} !== null) {
            $values_5 = [];
            foreach ($data->{'Devices'} as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, 'Docker\\API\\Model\\DeviceMapping', 'json', $context);
            }
            $object->setDevices($values_5);
        }
        if (property_exists($data, 'DeviceCgroupRules') && $data->{'DeviceCgroupRules'} !== null) {
            $values_6 = [];
            foreach ($data->{'DeviceCgroupRules'} as $value_6) {
                $values_6[] = $value_6;
            }
            $object->setDeviceCgroupRules($values_6);
        }
        if (property_exists($data, 'DeviceRequests') && $data->{'DeviceRequests'} !== null) {
            $values_7 = [];
            foreach ($data->{'DeviceRequests'} as $value_7) {
                $values_7[] = $this->denormalizer->denormalize($value_7, 'Docker\\API\\Model\\DeviceRequest', 'json', $context);
            }
            $object->setDeviceRequests($values_7);
        }
        if (property_exists($data, 'KernelMemory') && $data->{'KernelMemory'} !== null) {
            $object->setKernelMemory($data->{'KernelMemory'});
        }
        if (property_exists($data, 'KernelMemoryTCP') && $data->{'KernelMemoryTCP'} !== null) {
            $object->setKernelMemoryTCP($data->{'KernelMemoryTCP'});
        }
        if (property_exists($data, 'MemoryReservation') && $data->{'MemoryReservation'} !== null) {
            $object->setMemoryReservation($data->{'MemoryReservation'});
        }
        if (property_exists($data, 'MemorySwap') && $data->{'MemorySwap'} !== null) {
            $object->setMemorySwap($data->{'MemorySwap'});
        }
        if (property_exists($data, 'MemorySwappiness') && $data->{'MemorySwappiness'} !== null) {
            $object->setMemorySwappiness($data->{'MemorySwappiness'});
        }
        if (property_exists($data, 'NanoCPUs') && $data->{'NanoCPUs'} !== null) {
            $object->setNanoCPUs($data->{'NanoCPUs'});
        }
        if (property_exists($data, 'OomKillDisable') && $data->{'OomKillDisable'} !== null) {
            $object->setOomKillDisable($data->{'OomKillDisable'});
        }
        if (property_exists($data, 'Init') && $data->{'Init'} !== null) {
            $object->setInit($data->{'Init'});
        }
        if (property_exists($data, 'PidsLimit') && $data->{'PidsLimit'} !== null) {
            $object->setPidsLimit($data->{'PidsLimit'});
        }
        if (property_exists($data, 'Ulimits') && $data->{'Ulimits'} !== null) {
            $values_8 = [];
            foreach ($data->{'Ulimits'} as $value_8) {
                $values_8[] = $this->denormalizer->denormalize($value_8, 'Docker\\API\\Model\\ResourcesUlimitsItem', 'json', $context);
            }
            $object->setUlimits($values_8);
        }
        if (property_exists($data, 'CpuCount') && $data->{'CpuCount'} !== null) {
            $object->setCpuCount($data->{'CpuCount'});
        }
        if (property_exists($data, 'CpuPercent') && $data->{'CpuPercent'} !== null) {
            $object->setCpuPercent($data->{'CpuPercent'});
        }
        if (property_exists($data, 'IOMaximumIOps') && $data->{'IOMaximumIOps'} !== null) {
            $object->setIOMaximumIOps($data->{'IOMaximumIOps'});
        }
        if (property_exists($data, 'IOMaximumBandwidth') && $data->{'IOMaximumBandwidth'} !== null) {
            $object->setIOMaximumBandwidth($data->{'IOMaximumBandwidth'});
        }
        if (property_exists($data, 'Binds') && $data->{'Binds'} !== null) {
            $values_9 = [];
            foreach ($data->{'Binds'} as $value_9) {
                $values_9[] = $value_9;
            }
            $object->setBinds($values_9);
        }
        if (property_exists($data, 'ContainerIDFile') && $data->{'ContainerIDFile'} !== null) {
            $object->setContainerIDFile($data->{'ContainerIDFile'});
        }
        if (property_exists($data, 'LogConfig') && $data->{'LogConfig'} !== null) {
            $object->setLogConfig($this->denormalizer->denormalize($data->{'LogConfig'}, 'Docker\\API\\Model\\HostConfigLogConfig', 'json', $context));
        }
        if (property_exists($data, 'NetworkMode') && $data->{'NetworkMode'} !== null) {
            $object->setNetworkMode($data->{'NetworkMode'});
        }
        if (property_exists($data, 'PortBindings') && $data->{'PortBindings'} !== null) {
            $values_10 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'PortBindings'} as $key => $value_10) {
                $values_11 = [];
                foreach ($value_10 as $value_11) {
                    $values_11[] = $this->denormalizer->denormalize($value_11, 'Docker\\API\\Model\\PortBinding', 'json', $context);
                }
                $values_10[$key] = $values_11;
            }
            $object->setPortBindings($values_10);
        }
        if (property_exists($data, 'RestartPolicy') && $data->{'RestartPolicy'} !== null) {
            $object->setRestartPolicy($this->denormalizer->denormalize($data->{'RestartPolicy'}, 'Docker\\API\\Model\\RestartPolicy', 'json', $context));
        }
        if (property_exists($data, 'AutoRemove') && $data->{'AutoRemove'} !== null) {
            $object->setAutoRemove($data->{'AutoRemove'});
        }
        if (property_exists($data, 'VolumeDriver') && $data->{'VolumeDriver'} !== null) {
            $object->setVolumeDriver($data->{'VolumeDriver'});
        }
        if (property_exists($data, 'VolumesFrom') && $data->{'VolumesFrom'} !== null) {
            $values_12 = [];
            foreach ($data->{'VolumesFrom'} as $value_12) {
                $values_12[] = $value_12;
            }
            $object->setVolumesFrom($values_12);
        }
        if (property_exists($data, 'Mounts') && $data->{'Mounts'} !== null) {
            $values_13 = [];
            foreach ($data->{'Mounts'} as $value_13) {
                $values_13[] = $this->denormalizer->denormalize($value_13, 'Docker\\API\\Model\\Mount', 'json', $context);
            }
            $object->setMounts($values_13);
        }
        if (property_exists($data, 'Capabilities') && $data->{'Capabilities'} !== null) {
            $values_14 = [];
            foreach ($data->{'Capabilities'} as $value_14) {
                $values_14[] = $value_14;
            }
            $object->setCapabilities($values_14);
        }
        if (property_exists($data, 'CapAdd') && $data->{'CapAdd'} !== null) {
            $values_15 = [];
            foreach ($data->{'CapAdd'} as $value_15) {
                $values_15[] = $value_15;
            }
            $object->setCapAdd($values_15);
        }
        if (property_exists($data, 'CapDrop') && $data->{'CapDrop'} !== null) {
            $values_16 = [];
            foreach ($data->{'CapDrop'} as $value_16) {
                $values_16[] = $value_16;
            }
            $object->setCapDrop($values_16);
        }
        if (property_exists($data, 'CgroupnsMode') && $data->{'CgroupnsMode'} !== null) {
            $object->setCgroupnsMode($data->{'CgroupnsMode'});
        }
        if (property_exists($data, 'Dns') && $data->{'Dns'} !== null) {
            $values_17 = [];
            foreach ($data->{'Dns'} as $value_17) {
                $values_17[] = $value_17;
            }
            $object->setDns($values_17);
        }
        if (property_exists($data, 'DnsOptions') && $data->{'DnsOptions'} !== null) {
            $values_18 = [];
            foreach ($data->{'DnsOptions'} as $value_18) {
                $values_18[] = $value_18;
            }
            $object->setDnsOptions($values_18);
        }
        if (property_exists($data, 'DnsSearch') && $data->{'DnsSearch'} !== null) {
            $values_19 = [];
            foreach ($data->{'DnsSearch'} as $value_19) {
                $values_19[] = $value_19;
            }
            $object->setDnsSearch($values_19);
        }
        if (property_exists($data, 'ExtraHosts') && $data->{'ExtraHosts'} !== null) {
            $values_20 = [];
            foreach ($data->{'ExtraHosts'} as $value_20) {
                $values_20[] = $value_20;
            }
            $object->setExtraHosts($values_20);
        }
        if (property_exists($data, 'GroupAdd') && $data->{'GroupAdd'} !== null) {
            $values_21 = [];
            foreach ($data->{'GroupAdd'} as $value_21) {
                $values_21[] = $value_21;
            }
            $object->setGroupAdd($values_21);
        }
        if (property_exists($data, 'IpcMode') && $data->{'IpcMode'} !== null) {
            $object->setIpcMode($data->{'IpcMode'});
        }
        if (property_exists($data, 'Cgroup') && $data->{'Cgroup'} !== null) {
            $object->setCgroup($data->{'Cgroup'});
        }
        if (property_exists($data, 'Links') && $data->{'Links'} !== null) {
            $values_22 = [];
            foreach ($data->{'Links'} as $value_22) {
                $values_22[] = $value_22;
            }
            $object->setLinks($values_22);
        }
        if (property_exists($data, 'OomScoreAdj') && $data->{'OomScoreAdj'} !== null) {
            $object->setOomScoreAdj($data->{'OomScoreAdj'});
        }
        if (property_exists($data, 'PidMode') && $data->{'PidMode'} !== null) {
            $object->setPidMode($data->{'PidMode'});
        }
        if (property_exists($data, 'Privileged') && $data->{'Privileged'} !== null) {
            $object->setPrivileged($data->{'Privileged'});
        }
        if (property_exists($data, 'PublishAllPorts') && $data->{'PublishAllPorts'} !== null) {
            $object->setPublishAllPorts($data->{'PublishAllPorts'});
        }
        if (property_exists($data, 'ReadonlyRootfs') && $data->{'ReadonlyRootfs'} !== null) {
            $object->setReadonlyRootfs($data->{'ReadonlyRootfs'});
        }
        if (property_exists($data, 'SecurityOpt') && $data->{'SecurityOpt'} !== null) {
            $values_23 = [];
            foreach ($data->{'SecurityOpt'} as $value_23) {
                $values_23[] = $value_23;
            }
            $object->setSecurityOpt($values_23);
        }
        if (property_exists($data, 'StorageOpt') && $data->{'StorageOpt'} !== null) {
            $values_24 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'StorageOpt'} as $key_1 => $value_24) {
                $values_24[$key_1] = $value_24;
            }
            $object->setStorageOpt($values_24);
        }
        if (property_exists($data, 'Tmpfs') && $data->{'Tmpfs'} !== null) {
            $values_25 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'Tmpfs'} as $key_2 => $value_25) {
                $values_25[$key_2] = $value_25;
            }
            $object->setTmpfs($values_25);
        }
        if (property_exists($data, 'UTSMode') && $data->{'UTSMode'} !== null) {
            $object->setUTSMode($data->{'UTSMode'});
        }
        if (property_exists($data, 'UsernsMode') && $data->{'UsernsMode'} !== null) {
            $object->setUsernsMode($data->{'UsernsMode'});
        }
        if (property_exists($data, 'ShmSize') && $data->{'ShmSize'} !== null) {
            $object->setShmSize($data->{'ShmSize'});
        }
        if (property_exists($data, 'Sysctls') && $data->{'Sysctls'} !== null) {
            $values_26 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'Sysctls'} as $key_3 => $value_26) {
                $values_26[$key_3] = $value_26;
            }
            $object->setSysctls($values_26);
        }
        if (property_exists($data, 'Runtime') && $data->{'Runtime'} !== null) {
            $object->setRuntime($data->{'Runtime'});
        }
        if (property_exists($data, 'ConsoleSize') && $data->{'ConsoleSize'} !== null) {
            $values_27 = [];
            foreach ($data->{'ConsoleSize'} as $value_27) {
                $values_27[] = $value_27;
            }
            $object->setConsoleSize($values_27);
        }
        if (property_exists($data, 'Isolation') && $data->{'Isolation'} !== null) {
            $object->setIsolation($data->{'Isolation'});
        }
        if (property_exists($data, 'MaskedPaths') && $data->{'MaskedPaths'} !== null) {
            $values_28 = [];
            foreach ($data->{'MaskedPaths'} as $value_28) {
                $values_28[] = $value_28;
            }
            $object->setMaskedPaths($values_28);
        }
        if (property_exists($data, 'ReadonlyPaths') && $data->{'ReadonlyPaths'} !== null) {
            $values_29 = [];
            foreach ($data->{'ReadonlyPaths'} as $value_29) {
                $values_29[] = $value_29;
            }
            $object->setReadonlyPaths($values_29);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getCpuShares()) {
            $data->{'CpuShares'} = $object->getCpuShares();
        }
        if (null !== $object->getMemory()) {
            $data->{'Memory'} = $object->getMemory();
        }
        if (null !== $object->getCgroupParent()) {
            $data->{'CgroupParent'} = $object->getCgroupParent();
        }
        if (null !== $object->getBlkioWeight()) {
            $data->{'BlkioWeight'} = $object->getBlkioWeight();
        }
        if (null !== $object->getBlkioWeightDevice()) {
            $values = [];
            foreach ($object->getBlkioWeightDevice() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'BlkioWeightDevice'} = $values;
        }
        if (null !== $object->getBlkioDeviceReadBps()) {
            $values_1 = [];
            foreach ($object->getBlkioDeviceReadBps() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'BlkioDeviceReadBps'} = $values_1;
        }
        if (null !== $object->getBlkioDeviceWriteBps()) {
            $values_2 = [];
            foreach ($object->getBlkioDeviceWriteBps() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data->{'BlkioDeviceWriteBps'} = $values_2;
        }
        if (null !== $object->getBlkioDeviceReadIOps()) {
            $values_3 = [];
            foreach ($object->getBlkioDeviceReadIOps() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data->{'BlkioDeviceReadIOps'} = $values_3;
        }
        if (null !== $object->getBlkioDeviceWriteIOps()) {
            $values_4 = [];
            foreach ($object->getBlkioDeviceWriteIOps() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data->{'BlkioDeviceWriteIOps'} = $values_4;
        }
        if (null !== $object->getCpuPeriod()) {
            $data->{'CpuPeriod'} = $object->getCpuPeriod();
        }
        if (null !== $object->getCpuQuota()) {
            $data->{'CpuQuota'} = $object->getCpuQuota();
        }
        if (null !== $object->getCpuRealtimePeriod()) {
            $data->{'CpuRealtimePeriod'} = $object->getCpuRealtimePeriod();
        }
        if (null !== $object->getCpuRealtimeRuntime()) {
            $data->{'CpuRealtimeRuntime'} = $object->getCpuRealtimeRuntime();
        }
        if (null !== $object->getCpusetCpus()) {
            $data->{'CpusetCpus'} = $object->getCpusetCpus();
        }
        if (null !== $object->getCpusetMems()) {
            $data->{'CpusetMems'} = $object->getCpusetMems();
        }
        if (null !== $object->getDevices()) {
            $values_5 = [];
            foreach ($object->getDevices() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $data->{'Devices'} = $values_5;
        }
        if (null !== $object->getDeviceCgroupRules()) {
            $values_6 = [];
            foreach ($object->getDeviceCgroupRules() as $value_6) {
                $values_6[] = $value_6;
            }
            $data->{'DeviceCgroupRules'} = $values_6;
        }
        if (null !== $object->getDeviceRequests()) {
            $values_7 = [];
            foreach ($object->getDeviceRequests() as $value_7) {
                $values_7[] = $this->normalizer->normalize($value_7, 'json', $context);
            }
            $data->{'DeviceRequests'} = $values_7;
        }
        if (null !== $object->getKernelMemory()) {
            $data->{'KernelMemory'} = $object->getKernelMemory();
        }
        if (null !== $object->getKernelMemoryTCP()) {
            $data->{'KernelMemoryTCP'} = $object->getKernelMemoryTCP();
        }
        if (null !== $object->getMemoryReservation()) {
            $data->{'MemoryReservation'} = $object->getMemoryReservation();
        }
        if (null !== $object->getMemorySwap()) {
            $data->{'MemorySwap'} = $object->getMemorySwap();
        }
        if (null !== $object->getMemorySwappiness()) {
            $data->{'MemorySwappiness'} = $object->getMemorySwappiness();
        }
        if (null !== $object->getNanoCPUs()) {
            $data->{'NanoCPUs'} = $object->getNanoCPUs();
        }
        if (null !== $object->getOomKillDisable()) {
            $data->{'OomKillDisable'} = $object->getOomKillDisable();
        }
        if (null !== $object->getInit()) {
            $data->{'Init'} = $object->getInit();
        }
        if (null !== $object->getPidsLimit()) {
            $data->{'PidsLimit'} = $object->getPidsLimit();
        }
        if (null !== $object->getUlimits()) {
            $values_8 = [];
            foreach ($object->getUlimits() as $value_8) {
                $values_8[] = $this->normalizer->normalize($value_8, 'json', $context);
            }
            $data->{'Ulimits'} = $values_8;
        }
        if (null !== $object->getCpuCount()) {
            $data->{'CpuCount'} = $object->getCpuCount();
        }
        if (null !== $object->getCpuPercent()) {
            $data->{'CpuPercent'} = $object->getCpuPercent();
        }
        if (null !== $object->getIOMaximumIOps()) {
            $data->{'IOMaximumIOps'} = $object->getIOMaximumIOps();
        }
        if (null !== $object->getIOMaximumBandwidth()) {
            $data->{'IOMaximumBandwidth'} = $object->getIOMaximumBandwidth();
        }
        if (null !== $object->getBinds()) {
            $values_9 = [];
            foreach ($object->getBinds() as $value_9) {
                $values_9[] = $value_9;
            }
            $data->{'Binds'} = $values_9;
        }
        if (null !== $object->getContainerIDFile()) {
            $data->{'ContainerIDFile'} = $object->getContainerIDFile();
        }
        if (null !== $object->getLogConfig()) {
            $data->{'LogConfig'} = $this->normalizer->normalize($object->getLogConfig(), 'json', $context);
        }
        if (null !== $object->getNetworkMode()) {
            $data->{'NetworkMode'} = $object->getNetworkMode();
        }
        if (null !== $object->getPortBindings()) {
            $values_10 = new \stdClass();
            foreach ($object->getPortBindings() as $key => $value_10) {
                $values_11 = [];
                foreach ($value_10 as $value_11) {
                    $values_11[] = $this->normalizer->normalize($value_11, 'json', $context);
                }
                $values_10->{$key} = $values_11;
            }
            $data->{'PortBindings'} = $values_10;
        }
        if (null !== $object->getRestartPolicy()) {
            $data->{'RestartPolicy'} = $this->normalizer->normalize($object->getRestartPolicy(), 'json', $context);
        }
        if (null !== $object->getAutoRemove()) {
            $data->{'AutoRemove'} = $object->getAutoRemove();
        }
        if (null !== $object->getVolumeDriver()) {
            $data->{'VolumeDriver'} = $object->getVolumeDriver();
        }
        if (null !== $object->getVolumesFrom()) {
            $values_12 = [];
            foreach ($object->getVolumesFrom() as $value_12) {
                $values_12[] = $value_12;
            }
            $data->{'VolumesFrom'} = $values_12;
        }
        if (null !== $object->getMounts()) {
            $values_13 = [];
            foreach ($object->getMounts() as $value_13) {
                $values_13[] = $this->normalizer->normalize($value_13, 'json', $context);
            }
            $data->{'Mounts'} = $values_13;
        }
        if (null !== $object->getCapabilities()) {
            $values_14 = [];
            foreach ($object->getCapabilities() as $value_14) {
                $values_14[] = $value_14;
            }
            $data->{'Capabilities'} = $values_14;
        }
        if (null !== $object->getCapAdd()) {
            $values_15 = [];
            foreach ($object->getCapAdd() as $value_15) {
                $values_15[] = $value_15;
            }
            $data->{'CapAdd'} = $values_15;
        }
        if (null !== $object->getCapDrop()) {
            $values_16 = [];
            foreach ($object->getCapDrop() as $value_16) {
                $values_16[] = $value_16;
            }
            $data->{'CapDrop'} = $values_16;
        }
        if (null !== $object->getCgroupnsMode()) {
            $data->{'CgroupnsMode'} = $object->getCgroupnsMode();
        }
        if (null !== $object->getDns()) {
            $values_17 = [];
            foreach ($object->getDns() as $value_17) {
                $values_17[] = $value_17;
            }
            $data->{'Dns'} = $values_17;
        }
        if (null !== $object->getDnsOptions()) {
            $values_18 = [];
            foreach ($object->getDnsOptions() as $value_18) {
                $values_18[] = $value_18;
            }
            $data->{'DnsOptions'} = $values_18;
        }
        if (null !== $object->getDnsSearch()) {
            $values_19 = [];
            foreach ($object->getDnsSearch() as $value_19) {
                $values_19[] = $value_19;
            }
            $data->{'DnsSearch'} = $values_19;
        }
        if (null !== $object->getExtraHosts()) {
            $values_20 = [];
            foreach ($object->getExtraHosts() as $value_20) {
                $values_20[] = $value_20;
            }
            $data->{'ExtraHosts'} = $values_20;
        }
        if (null !== $object->getGroupAdd()) {
            $values_21 = [];
            foreach ($object->getGroupAdd() as $value_21) {
                $values_21[] = $value_21;
            }
            $data->{'GroupAdd'} = $values_21;
        }
        if (null !== $object->getIpcMode()) {
            $data->{'IpcMode'} = $object->getIpcMode();
        }
        if (null !== $object->getCgroup()) {
            $data->{'Cgroup'} = $object->getCgroup();
        }
        if (null !== $object->getLinks()) {
            $values_22 = [];
            foreach ($object->getLinks() as $value_22) {
                $values_22[] = $value_22;
            }
            $data->{'Links'} = $values_22;
        }
        if (null !== $object->getOomScoreAdj()) {
            $data->{'OomScoreAdj'} = $object->getOomScoreAdj();
        }
        if (null !== $object->getPidMode()) {
            $data->{'PidMode'} = $object->getPidMode();
        }
        if (null !== $object->getPrivileged()) {
            $data->{'Privileged'} = $object->getPrivileged();
        }
        if (null !== $object->getPublishAllPorts()) {
            $data->{'PublishAllPorts'} = $object->getPublishAllPorts();
        }
        if (null !== $object->getReadonlyRootfs()) {
            $data->{'ReadonlyRootfs'} = $object->getReadonlyRootfs();
        }
        if (null !== $object->getSecurityOpt()) {
            $values_23 = [];
            foreach ($object->getSecurityOpt() as $value_23) {
                $values_23[] = $value_23;
            }
            $data->{'SecurityOpt'} = $values_23;
        }
        if (null !== $object->getStorageOpt()) {
            $values_24 = new \stdClass();
            foreach ($object->getStorageOpt() as $key_1 => $value_24) {
                $values_24->{$key_1} = $value_24;
            }
            $data->{'StorageOpt'} = $values_24;
        }
        if (null !== $object->getTmpfs()) {
            $values_25 = new \stdClass();
            foreach ($object->getTmpfs() as $key_2 => $value_25) {
                $values_25->{$key_2} = $value_25;
            }
            $data->{'Tmpfs'} = $values_25;
        }
        if (null !== $object->getUTSMode()) {
            $data->{'UTSMode'} = $object->getUTSMode();
        }
        if (null !== $object->getUsernsMode()) {
            $data->{'UsernsMode'} = $object->getUsernsMode();
        }
        if (null !== $object->getShmSize()) {
            $data->{'ShmSize'} = $object->getShmSize();
        }
        if (null !== $object->getSysctls()) {
            $values_26 = new \stdClass();
            foreach ($object->getSysctls() as $key_3 => $value_26) {
                $values_26->{$key_3} = $value_26;
            }
            $data->{'Sysctls'} = $values_26;
        }
        if (null !== $object->getRuntime()) {
            $data->{'Runtime'} = $object->getRuntime();
        }
        if (null !== $object->getConsoleSize()) {
            $values_27 = [];
            foreach ($object->getConsoleSize() as $value_27) {
                $values_27[] = $value_27;
            }
            $data->{'ConsoleSize'} = $values_27;
        }
        if (null !== $object->getIsolation()) {
            $data->{'Isolation'} = $object->getIsolation();
        }
        if (null !== $object->getMaskedPaths()) {
            $values_28 = [];
            foreach ($object->getMaskedPaths() as $value_28) {
                $values_28[] = $value_28;
            }
            $data->{'MaskedPaths'} = $values_28;
        }
        if (null !== $object->getReadonlyPaths()) {
            $values_29 = [];
            foreach ($object->getReadonlyPaths() as $value_29) {
                $values_29[] = $value_29;
            }
            $data->{'ReadonlyPaths'} = $values_29;
        }

        return $data;
    }
}
