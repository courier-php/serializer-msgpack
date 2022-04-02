<?php
declare(strict_types = 1);

namespace Courier\Serializer;

final class MsgPackSerializer implements SerializerInterface {
  public function getContentType(): string {
    return 'application/vnd.courier+msgpack-serialized';
  }

  public function getContentEncoding(): string {
    return 'binary';
  }

  public function serialize(array $array): string {
    return msgpack_pack($array);
  }

  public function unserialize(string $data): array {
    return msgpack_unpack($data);
  }
}
