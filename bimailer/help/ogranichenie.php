<!doctype html><html lang="ru"><head><meta charset="utf-8" /><title>BiMailer</title><meta name="author" content="BusMail.ru"><link rel="shortcut icon" type="image/x-icon" href="/bimailer/images/icon.png"><link rel="stylesheet" href="/bimailer/extra/style.css"><link rel="stylesheet" href="/bimailer/extra/menu.css"><script src="/bimailer/extra/jquery.js"></script><style>label{cursor:pointer;}</style></head><?php require_once "../dbuser.php";is_array($INT) ?: require_once "../advanced/enter.php";?><body><?php require_once "../menu.php"; ?><h1>ВАЖНО! Ограничения на  отправку в час</h1><section><p>Некоторые хостинги ограничивают рассылку писем, что бы пресечь попадание своих IP адресов в блэк листы. Данные ограничения могут высчитываться по разному:<br>- счетчик отправленных писем сбрасывается ровно в 00 минут каждого часа;<br>- счетчик писем сбрасывается через час после превышения лимитов на рассылку;<br>- перерасчет количества писем за последний час, т.е. квота равна разности лимита писем и количество отправленных за прошедшие 60 мин.<br>- и прочие формулы...</p><p>На практике может возникнуть ситуация: когда счетчик <span style="color:#ca6002; font-weight:bold;">Bi</span><span style="color:#445f88; font-weight:bold;">Mailer</span> сбрасывая ограничения в 30минут каждого часа, расходует новый лимит за вторую половину этого же часа и при настройках хостинга "сброс в 00мин.", лимит будет превышен.</p><p>Рекомендуем использовать данную возможность для профилактики попадания в блек листы, указывая значения от 100 до 2000 в зависимости от количества подключенных в скрипте серверов для рассылки.</p><p>Функционал &quot;ограничений в час&quot; добавлен по просьбам пользователей и не гарантирует защиту от блокировки или от попадания в блек листы. Команда BusMail (разработчик скрипта) не несет ответственности за возможную блокировку хостинга оператором.</p></section><footer class="foo"><?php require_once "../footer.php"; ?></footer></body></html>