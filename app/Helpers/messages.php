<?php 

if (!function_exists('returnValidatonError')) {
    function returnValidatonError($error)
    {
        return back()->withErrors($error)->withInput();
    }
}
if (!function_exists('success')) {
    function success($message)
    {
        return redirect()->back()->with([
            'success' => $message
        ]);
    }
}
if (!function_exists('error')) {
    function error($message)
    {
        return back()->withErrors($message);
    }
}
if (!function_exists('uploadSingleImage')) {
    function uploadSingleImage($file, $slug)
    {
        if ($file && $file->isValid()) {
            $slug = "$slug";
            $uniqueName = $slug . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('storage/uploads'), $uniqueName);
            return $uniqueName;
        }
        return null;
    }
}
