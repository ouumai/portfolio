<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Portfolio Contact Message</title>
</head>
<body style="font-family: Arial, sans-serif; color: #0f172a; line-height: 1.6;">
    <h2 style="margin-bottom: 16px;">New Portfolio Contact Message</h2>
    <p><strong>Name:</strong> <?= esc($name) ?></p>
    <p><strong>Email:</strong> <?= esc($email) ?></p>
    <p><strong>Subject:</strong> <?= esc($subjectLine) ?></p>
    <p><strong>Message:</strong></p>
    <div style="padding: 16px; background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px;">
        <?= nl2br(esc($messageBody)) ?>
    </div>
</body>
</html>
