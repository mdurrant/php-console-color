<?php

namespace PhpConsoleColor;

class Console
{
    /**
     * @var array
     */
    protected $map = [
        'black'     => '0;30m',
        'red'       => '0;31m',
        'green'     => '0;32m',
        'yellow'    => '0;33m',
        'blue'      => '0;34m',
        'purple'    => '0;35m',
        'cyan'      => '0;36m',
        'white'     => '0;37m',

        'blackB'    => '1;30m',
        'redB'      => '1;31m',
        'greenB'    => '1;32m',
        'yellowB'   => '1;33m',
        'blueB'     => '1;34m',
        'purpleB'   => '1;35m',
        'cyanB'     => '1;36m',
        'whiteB'    => '1;37m',

        'blackU'    => '4;30m',
        'redU'      => '4;31m',
        'greenU'    => '4;32m',
        'yellowU'   => '4;33m',
        'blueU'     => '4;34m',
        'purpleU'   => '4;35m',
        'cyanU'     => '4;36m',
        'whiteU'    => '4;37m',
    ];

    /**
     * @param string $str
     * @return string
     */
    private function format($str)
    {
        preg_match_all('/<(\/?\w+)>/i', $str, $matches);
        if (empty($matches[1])) {
            return $str;
        }

        foreach ($matches[1] as $k => $match) {
            if (strpos($match, '/') === 0) {
                $str = str_replace($matches[0][$k], "\033[0m", $str);
                continue;
            }

            if (!empty($this->map[$match])) {
                $str = str_replace($matches[0][$k], "\033[" . $this->map[$match], $str);
            }
        }

        return $str;
    }

    /**
     * @param $str
     */
    public function write($str)
    {
        print $this->format($str);
    }

    /**
     * @param string|null $str
     */
    public function writeLn($str = null)
    {
        $this->write($str . "\n");
    }
}
