<!DOCTYPE html>
<html lang="<?= esc(service('request')->getLocale()) ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc(lang('Portfolio.email.title')) ?></title>
</head>
<body style="margin: 0; padding: 40px 20px; background-color: #f1f5f9; color: #334155; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; line-height: 1.6;">
    <table width="100%" cellpadding="0" cellspacing="0" style="max-width: 600px; margin: 0 auto; overflow: hidden; border-radius: 8px; background-color: #ffffff; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);">
        <tr>
            <td style="background-color: #0f172a; padding: 24px; text-align: center;">
                <h2 style="margin: 0; font-size: 20px; font-weight: 600; color: #ffffff;"><?= esc(lang('Portfolio.email.heading')) ?></h2>
            </td>
        </tr>

        <tr>
            <td style="padding: 32px 24px;">
                <p style="margin-top: 0; margin-bottom: 24px; font-size: 16px;"><?= esc(lang('Portfolio.email.intro')) ?></p>

                <table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom: 24px; border: 1px solid #e2e8f0; border-radius: 8px; background-color: #f8fafc;">
                    <tr>
                        <td style="padding: 16px;">
                            <p style="margin: 0 0 8px 0; font-size: 15px;"><strong><?= esc(lang('Portfolio.email.name')) ?>:</strong> <?= esc($name) ?></p>
                            <p style="margin: 0 0 8px 0; font-size: 15px;"><strong><?= esc(lang('Portfolio.email.email')) ?>:</strong> <a href="mailto:<?= esc($email) ?>" style="color: #2563eb; text-decoration: none; font-weight: 500;"><?= esc($email) ?></a></p>
                            <p style="margin: 0; font-size: 15px;"><strong><?= esc(lang('Portfolio.email.subject')) ?>:</strong> <?= esc($subjectLine) ?></p>
                        </td>
                    </tr>
                </table>

                <h3 style="margin-bottom: 12px; font-size: 12px; letter-spacing: 1.5px; text-transform: uppercase; color: #64748b;"><?= esc(lang('Portfolio.email.message')) ?></h3>

                <div style="margin-bottom: 32px; border-left: 4px solid #3b82f6; border-radius: 4px; background-color: #ffffff; padding: 20px; box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);">
                    <p style="margin: 0; white-space: pre-wrap; color: #1e293b;"><?= nl2br(esc((string) $messageBody)) ?></p>
                </div>

                <div style="text-align: center;">
                    <a href="mailto:<?= esc($email) ?>" style="display: inline-block; border-radius: 6px; background-color: #0f172a; padding: 12px 28px; color: #ffffff; font-size: 15px; font-weight: 600; text-decoration: none;"><?= esc(lang('Portfolio.email.reply')) ?></a>
                </div>
            </td>
        </tr>

        <tr>
            <td style="border-top: 1px solid #e2e8f0; background-color: #f8fafc; padding: 16px; text-align: center;">
                <p style="margin: 0; font-size: 12px; color: #94a3b8;"><?= esc(lang('Portfolio.email.footer')) ?></p>
            </td>
        </tr>
    </table>
</body>
</html>
