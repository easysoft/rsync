<?php
/**
 * @Author : a.zinovyev
 * @Package: phync
 * @License: http://www.opensource.org/licenses/mit-license.php
 */

namespace xobotyi\phync;

class Command
{
    private $exec;

    public function __construct(string $exec) {
        if ($exec = trim($exec)) {
            throw new \Error("Executable path must be a valuable string");
        }

        $this->exec = $exec;
    }

    public function __toString() :string {
        return $this->exec;
    }
}