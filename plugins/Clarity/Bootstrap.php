<?php

namespace Plugin\Clarity;

use Illuminate\Support\Facades\Log;

class Bootstrap
{
    /**
     * @return void
     */
    public function boot(): void
    {
        $this->addScript();
    }

    public function addScript(): void
    {
        add_hook_blade('layout.header.code', function ($callback, $output, $data) {
            $script = plugin_setting('clarity.value') ?? '';

            Log::info("clarity plugin value: " . $script);

            // return $output . $script . $logs;

            $data['script'] = $script;

            return view('Clarity::shop.script_container', $data)->render();
        });
    }
}
