<?php

if (!function_exists('formatSpecifications')) {
    /**
     * Formats the specifications array into an HTML format as specified.
     *
     * @param array $specifications
     * @return string
     */
    function formatSpecifications(array $specifications)
    {
        $output = '';

        foreach ($specifications as $key => $value) {
            if (is_array($value)) {
                $output .= '<strong>' . strtoupper($key) . '</strong><br>' . formatSpecifications($value);
            } else {
                $output .= '<strong>' . strtoupper($key) . '</strong><br>' . $value;
            }
            // Add line breaks between sections
            $output .= '<br><br>';
        }

        return $output;
    }
}
