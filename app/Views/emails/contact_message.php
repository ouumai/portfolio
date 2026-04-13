<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Contact Message</title>
</head>
<body style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; background-color: #f1f5f9; color: #334155; line-height: 1.6; margin: 0; padding: 40px 20px;">

    <table width="100%" cellpadding="0" cellspacing="0" style="max-width: 600px; margin: 0 auto; background-color: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);">
        
        <tr>
            <td style="background-color: #0f172a; padding: 24px; text-align: center;">
                <h2 style="color: #ffffff; margin: 0; font-size: 20px; font-weight: 600;">New Contact Request</h2>
            </td>
        </tr>

        <tr>
            <td style="padding: 32px 24px;">
                <p style="margin-top: 0; margin-bottom: 24px; font-size: 16px;">Hello! You have received a new message from your portfolio website.</p>

                <table width="100%" cellpadding="0" cellspacing="0" style="background-color: #f8fafc; border-radius: 8px; border: 1px solid #e2e8f0; margin-bottom: 24px;">
                    <tr>
                        <td style="padding: 16px;">
                            <p style="margin: 0 0 8px 0; font-size: 15px;"><strong>Name:</strong> <?= esc($name) ?></p>
                            <p style="margin: 0 0 8px 0; font-size: 15px;"><strong>Email:</strong> <a href="mailto:<?= esc($email) ?>" style="color: #2563eb; text-decoration: none; font-weight: 500;"><?= esc($email) ?></a></p>
                            <p style="margin: 0; font-size: 15px;"><strong>Subject:</strong> <?= esc($subjectLine) ?></p>
                        </td>
                    </tr>
                </table>

                <h3 style="font-size: 12px; text-transform: uppercase; color: #64748b; letter-spacing: 1.5px; margin-bottom: 12px;">Message</h3>
                
                <div style="padding: 20px; background-color: #ffffff; border-left: 4px solid #3b82f6; border-radius: 4px; box-shadow: 0 1px 3px rgba(0,0,0,0.1); margin-bottom: 32px;">
                    <p style="margin: 0; white-space: pre-wrap; color: #1e293b;"><?= nl2br(esc((string)$messageBody)) ?></p>
                </div>

                <div style="text-align: center;">
                    <a href="mailto:<?= esc($email) ?>" style="display: inline-block; padding: 12px 28px; background-color: #0f172a; color: #ffffff; text-decoration: none; border-radius: 6px; font-weight: 600; font-size: 15px;">Reply to Sender</a>
                </div>
            </td>
        </tr>

        <tr>
            <td style="background-color: #f8fafc; padding: 16px; text-align: center; border-top: 1px solid #e2e8f0;">
                <p style="margin: 0; font-size: 12px; color: #94a3b8;">This message was automatically generated from your portfolio.</p>
            </td>
        </tr>
    </table>

</body>
</html>