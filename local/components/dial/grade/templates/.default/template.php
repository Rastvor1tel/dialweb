<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<form action="#" class="grade-form">
	<div class="grade-column__left">

		<? if (isset($_GET['id']) && intval($_GET['id']) > 0): ?>
		<input type="hidden" name="person_id" value="<?=intval($_GET['id']);?>">
		<input readonly name="person_name" required type="text" class="grade__input" value="<?=$arResult['PERSON_NAME'];?>">
		<? else :?>
			<input name="person_name" placeholder="Имя и фамилия сотрудника*" required type="text" class="grade__input">
		<? endif;?>
		<div class="grade__pick">
			<span class="grade__pick-title">Ваша оценка*</span>
			<div class="grade__stars">
				<span class="grade__star"></span>
				<span class="grade__star"></span>
				<span class="grade__star"></span>
				<span class="grade__star"></span>
				<span class="grade__star"></span>
			</div>
			<input type="hidden" name="rating" value="5" class="grade__rating">
		</div>
		<textarea placeholder="Комментарий*" required name="comment" class="grade__textarea"></textarea>
		<div class="grade-form__privacy">Нажимая ОТПРАВИТЬ я даю согласие на обработку
		персональных данных</div>
	</div>
	<div class="grade-column__right">
		<input name="fio" required placeholder="Как ваc зовут?*" type="text" class="grade__input">
		<input name="phone" required placeholder="Контактный телефон*" type="text" class="grade__input masked-phone">
		<input name="company" placeholder="Название вашей компании" type="text" class="grade__input">
		<button class="button button_oragne grade__button">Отправить</button>
	</div>
</form>
<div class="general-word">
	<div class="general-word__person">
		<div class="general-word__photo">
			<img src="<?=$templateFolder?>/alla.png" alt="Алла Штауб">
		</div>
		<div class="general-word__info">
			<div class="general-word__title">Слово генерального директора</div>
			<div class="general-word__name">Алла Александровна</div>
			<div class="general-word__position">генеральный директор</div>
		</div>
	</div>
	<div class="general-word__text">
		<p>
			В нашей работе основными ориентирами являются качество, профессионализм и постоянное развитие.
		</p>
		<p>
			Каждый оставленный вами отзыв помогает нам развиваться, становиться лучше, вкладывая как можно больше сил в успех ваших проектов.
		</p>
		<p>
			Приоритетом для нас всегда были и остаются люди, наши реальные и потенциальные Клиенты, желания и интересы которых мы стараемся предугадать и максимально удовлетворить.
		</p>
		<p>
			Следуя современным тенденциям, мы выбираем комплексный подход в работе, который позволяет добиваться максимума для процветания вашего бизнеса.
		</p>
		<p>
			Мы всегда открыты для долговременного и взаимовыгодного сотрудничества.
		</p>
	</div>
</div>


<?/*
	<div class="grade__banner">
 <span class="grade__title">Слово генерального директора</span>
		<div class="grade__banner-content">
			<div class="grade__banner-preview">
 <img src="/local/templates/dial/template/img/grade.png" alt="">
			</div>
			<div class="grade__banner-desc">
 <span class="grade__banner-title">Алла Александровна</span> <span class="grade__banner-subtitle">генеральный директор</span>
				<p>
					 В нашей работе основными ориентирами являются качество, профессионализм и постоянное развитие.
				</p>
				<p>
					 Каждый оставленный вами отзыв помогает нам развиваться, становиться лучше, вкладывая как можно больше сил в успех ваших проектов.
				</p>
				<p>
					 Приоритетом для нас всегда были и остаются люди, наши реальные и потенциальные Клиенты, желания и интересы которых мы стараемся предугадать и максимально удовлетворить.
				</p>
				<p>
					 Следуя современным тенденциям, мы выбираем комплексный подход в работе, который позволяет добиваться максимума для процветания вашего бизнеса.
				</p>
				<p>
					 Мы всегда открыты для долговременного и взаимовыгодного сотрудничества.
				</p>
			</div>
		</div>
	</div>
</div>
 <br>
*/?>