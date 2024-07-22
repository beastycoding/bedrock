<?php

/**
 * @author   Benjamin Braun <bbraun@beastycoding.com>
 * @license  GPLv3+, <http://www.gnu.org/licenses/gpl-3.0>
 * @link     https://www.beastycoding.com
 * @formatter:off
 */

$finder = (new PhpCsFixer\Finder())
    ->in(__DIR__)
    ->exclude([
        'autogenerated_content',
        'tests/fixtures',
    ])
    ->notPath([
        '.tmp',
        'node_modules',
        'vendor',
    ]);

return (new PhpCsFixer\Config())
    ->setRules([
        // General Formatting
        'indentation_type'                        => true,
        'line_ending'                             => true,
        'no_trailing_whitespace'                  => true,
        'no_whitespace_in_blank_line'             => true,
        'single_blank_line_at_eof'                => true,
        'array_syntax'                            => ['syntax' => 'short'],
        'no_trailing_comma_in_singleline'         => true,

        // Namespace and Imports
        'blank_line_after_namespace'              => true,
        'clean_namespace'                         => true,
        'single_import_per_statement'             => true,
        'single_line_after_imports'               => true,
        'ordered_imports'                         => false,

        // Class and Functions
        'class_definition'                        => true,
        'single_class_element_per_statement'      => [
            'elements' => [
                'property',
            ],
        ],
        'function_declaration'                    => true,
        'method_argument_space'                   => [
            'on_multiline' => 'ensure_fully_multiline',
        ],
        'visibility_required'                     => [
            'elements' => [
                'method',
                'property',
            ],
        ],

        // Control Structures
        'control_structure_braces'                => true,
        'control_structure_continuation_position' => true,
        'braces_position'                         => true,
        'elseif'                                  => true,
        'no_multiple_statements_per_line'         => true,
        'switch_case_semicolon_to_colon'          => true,
        'switch_case_space'                       => true,
        'no_unneeded_control_parentheses'         => true,

        // PHPDoc
        'phpdoc_indent'                           => true,
        'general_phpdoc_tag_rename'               => true,
        'phpdoc_inline_tag_normalizer'            => true,
        'phpdoc_tag_type'                         => true,
        'phpdoc_no_access'                        => false,
        'phpdoc_no_package'                       => false,
        'phpdoc_no_useless_inheritdoc'            => true,
        'phpdoc_scalar'                           => true,
        'phpdoc_single_line_var_spacing'          => true,
        'phpdoc_summary'                          => true,
        'phpdoc_to_comment'                       => true,
        'phpdoc_trim'                             => true,
        'phpdoc_types'                            => true,
        'phpdoc_var_without_name'                 => true,
        'phpdoc_align'                            => [
            'align'   => 'vertical',
            'spacing' => 2,
        ],
        'no_empty_phpdoc'                         => true,

        // Comment Formatting
        'align_multiline_comment'                 => true,
        'no_break_comment'                        => true,
        'no_empty_comment'                        => true,
        'no_trailing_whitespace_in_comment'       => true,

        // Miscellaneous
        'constant_case'                           => true,
        'encoding'                                => true,
        'full_opening_tag'                        => true,
        'lowercase_keywords'                      => true,
        'no_closing_tag'                          => true,
        'no_empty_statement'                      => true,
        'no_space_around_double_colon'            => true,
        'no_spaces_after_function_name'           => true,
        'spaces_inside_parentheses'               => true,
        'statement_indentation'                   => true,
        'ordered_interfaces'                      => true,

        // Echo/Print Consistency
        'no_mixed_echo_print'                     => [
            'use' => 'echo',
        ],

        // Type Casting
        'no_short_bool_cast'                      => false,
    ])
    ->setIndent('    ')
    ->setCacheFile(__DIR__ . '/.php-cs-fixer.cache')
    ->setFinder($finder);
