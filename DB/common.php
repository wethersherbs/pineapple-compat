<?php
class DB_common extends \Mayden\Pineapple\DB\Driver\Common
{
    /**
     * DEPRECATED:  String conversion method
     *
     * @return string  a string describing the current PEAR DB object
     *
     * @deprecated Method deprecated in Release 1.7.0
     */
    public function toSleep()
    {
        return $this->__toSleep();
    }

    /**
     * DEPRECATED: Quotes a string so it can be safely used within string
     * delimiters in a query
     *
     * @param string $string  the string to be quoted
     *
     * @return string  the quoted string
     *
     * @see Common::quoteSmart(), Common::escapeSimple()
     * @deprecated Method deprecated some time before Release 1.2
     */
    public function quoteString($string)
    {
        $string = $this->quoteSmart($string);
        if ($string{0} == "'") {
            return substr($string, 1, -1);
        }
        return $string;
    }
}
