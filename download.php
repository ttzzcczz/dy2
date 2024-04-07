<?php
if(isset($_POST['video_url'])) {
    $video_url = $_POST['video_url'];
    // تنفيذ أمر تنزيل الفيديو
    $command = 'youtube-dl ' . escapeshellarg($video_url);
    // تنفيذ الأمر والحصول على الناتج
    $output = shell_exec($command);
    // تحقق من وجود الناتج
    if($output) {
        echo '<p style="color:green;">تم تحميل الفيديو بنجاح.</p>';
    } else {
        echo '<p style="color:red;">حدث خطأ أثناء تحميل الفيديو. يرجى التأكد من صحة الرابط وتوافر أداة التنزيل.</p>';
    }
}
?>
