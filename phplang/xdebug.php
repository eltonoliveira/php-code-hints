<?php

// Start of xdebug v.2.2.3

define("XDEBUG_STACK_NO_DESC", 1);

function xdebug_get_stack_depth () {}

function xdebug_get_function_stack () {}

function xdebug_get_formatted_function_stack () {}

/**
 * Get the current formatted function stack.
 *
 * @param string $message [optional]
 *   Replace the message in the header.
 * @param integer $options [optional]
 *   Bit mask used to configure the output, the following options are available:
 *   <ul>
 *     <li><code>XDEBUG_STACK_NO_DESC</code> omit the header.</li>
 *   </ul>
 * @return string
 *   The current formatted function stack.
 */
function xdebug_print_function_stack($message = null, $options = 0) {}

function xdebug_get_declared_vars () {}

function xdebug_call_class () {}

function xdebug_call_function () {}

function xdebug_call_file () {}

function xdebug_call_line () {}

function xdebug_var_dump () {}

function xdebug_debug_zval () {}

function xdebug_debug_zval_stdout () {}

function xdebug_enable () {}

function xdebug_disable () {}

function xdebug_is_enabled () {}

function xdebug_break () {}

function xdebug_start_trace () {}

function xdebug_stop_trace () {}

function xdebug_get_tracefile_name () {}

function xdebug_get_profiler_filename () {}

function xdebug_dump_aggr_profiling_data () {}

function xdebug_clear_aggr_profiling_data () {}

function xdebug_memory_usage () {}

function xdebug_peak_memory_usage () {}

function xdebug_time_index () {}

function xdebug_start_error_collection () {}

function xdebug_stop_error_collection () {}

function xdebug_get_collected_errors () {}

function xdebug_start_code_coverage () {}

function xdebug_stop_code_coverage () {}

function xdebug_get_code_coverage () {}

function xdebug_get_function_count () {}

function xdebug_dump_superglobals () {}

function xdebug_get_headers () {}

define ('XDEBUG_TRACE_APPEND', 1);
define ('XDEBUG_TRACE_COMPUTERIZED', 2);
define ('XDEBUG_TRACE_HTML', 4);
define ('XDEBUG_CC_UNUSED', 1);
define ('XDEBUG_CC_DEAD_CODE', 2);

// End of xdebug v.2.2.3
?>
