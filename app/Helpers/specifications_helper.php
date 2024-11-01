<?php

if (!function_exists('formatSpecifications')) {
    /**
     * Formats the specifications array into an HTML table format with Tailwind CSS.
     *
     * @param array $specifications
     * @return string
     */
    function formatSpecifications(array $specifications)
    {
        $output = '<table class="w-full border-collapse border border-gray-300">';

        foreach ($specifications as $key => $value) {
            $output .= '<tr class="border border-gray-300">';
            $output .= '<td class="font-bold p-2 border-r border-gray-300">' . strtoupper($key) . '</td>';
            $output .= '<td class="p-2">';

            if (is_array($value)) {
                if (array_keys($value) === range(0, count($value) - 1)) {
                    $output .= implode(', ', $value);
                } else {
                    $output .= formatSpecifications($value);
                }
            } else {
                $output .= $value;
            }

            $output .= '</td>';
            $output .= '</tr>';
        }

        $output .= '</table>';
        return $output;
    }
}
