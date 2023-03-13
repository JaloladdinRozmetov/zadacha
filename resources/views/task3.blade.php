@extends('app.layout')

@section('content')
   <div class="container">
       <div class="popular-questions__box">
           <h2 class="popular-question__title">Популярные вопросы</h2>
           <div class="accordion">
               <div class="accordion-item">
                   <div class="accordion-header">Ученые говорят, что чем выше уровень IQ, тем чаще люди видят сны? <a class="accordion-header_input" href="#">+</a></div>
                   <div class="accordion-content">Может, так оно и есть, но не думай, что ты дурачок, если не можешь вспомнить свои сновидения. Большая часть людей не помнит, что им снится, а средняя длина сна — лишь 2—3 секунды — вполне достаточно, чтобы понять, что что-то видишь.</div>
               </div>
               <div class="accordion-item">
                   <div class="accordion-header">Женское сердце бьется быстрее мужского? <a class="accordion-header_input" href="#">+</a></div>
                   <div class="accordion-content">Может, так оно и есть, но не думай, что ты дурачок, если не можешь вспомнить свои сновидения. Большая часть людей не помнит, что им снится, а средняя длина сна — лишь 2—3 секунды — вполне достаточно, чтобы понять, что что-то видишь..</div>
               </div>
               <div class="accordion-item">
                   <div class="accordion-header">Нейроны продолжают расти в течение всей жизни человека? <a class="accordion-header_input" href="#">+</a></div>
                   <div class="accordion-content">Может, так оно и есть, но не думай, что ты дурачок, если не можешь вспомнить свои сновидения. Большая часть людей не помнит, что им снится, а средняя длина сна — лишь 2—3 секунды — вполне достаточно, чтобы понять, что что-то видишь.</div>
               </div>
               <div class="accordion-item">
                   <div class="accordion-header">Информация проходит по разным нейронам с разной скоростью? <a class="accordion-header_input" href="#">+</a></div>
                   <div class="accordion-content">Может, так оно и есть, но не думай, что ты дурачок, если не можешь вспомнить свои сновидения. Большая часть людей не помнит, что им снится, а средняя длина сна — лишь 2—3 секунды — вполне достаточно, чтобы понять, что что-то видишь.</div>
               </div>
               <div class="accordion-item">
                   <div class="accordion-header">Сам мозг не чувствует боли? <a class="accordion-header_input" href="#">+</a></div>
                   <div class="accordion-content">Может, так оно и есть, но не думай, что ты дурачок, если не можешь вспомнить свои сновидения. Большая часть людей не помнит, что им снится, а средняя длина сна — лишь 2—3 секунды — вполне достаточно, чтобы понять, что что-то видишь.</div>
               </div>
           </div>
       </div>
   </div>

    @push('scripts')
        <script>
        const accordionItems = document.querySelectorAll('.accordion-item');

        accordionItems.forEach(item => {
        const header = item.querySelector('.accordion-header_input');
        const content = item.querySelector('.accordion-content');

        header.addEventListener('click', () => {
            item.classList.toggle('active');

            if (item.classList.contains('active')) {
                content.style.display = 'block';
                header.textContent = "-"

            } else {
                content.style.display = 'none';
                header.textContent = "+"
            }

            // Закрытие других активных элементов при открытии нового
            accordionItems.forEach(otherItem => {
                if (otherItem !== item && otherItem.classList.contains('active')) {
                    otherItem.classList.remove('active');
                    otherItem.querySelector('.accordion-content').style.display = 'none';
                }
            });
        });
        });
        </script>
    @endpush
@endsection
