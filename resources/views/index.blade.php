<!DOCTYPE html>
<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
    </h2>
  </x-slot>

  <head>
    <title>Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
      * {
        box-sizing: border-box;
      }

      body {
        font-family: Arial, Helvetica, sans-serif;
      }


      /* Create two columns/boxes that floats next to each other */
      nav {
        float: left;
        width: 30%;
        height: 300px;
        /* only for demonstration, should be removed */
        background: #ccc;
        padding: 20px;
      }

      /* Style the list inside the menu */
      nav ul {
        list-style-type: none;
        padding: 0;
      }

      article {
        float: left;
        padding: 20px;
        width: 70%;
        background-color: #f1f1f1;
        height: 300px;
        /* only for demonstration, should be removed */
      }

      /* Clear floats after the columns */
      section::after {
        content: "";
        display: table;
        clear: both;
      }

      /* Style the footer */
      footer {
        background-color: #777;
        padding: 10px;
        text-align: center;
        color: white;
      }

      /* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
      @media (max-width: 600px) {

        nav,
        article {
          width: 100%;
          height: auto;
        }
      }

    </style>
  </head>
  <header class="bg-white shadow">
    <div class="container max-w-7xl mx-auto sm:px-6 lg:px-8 mt-4">
      <h2 class="'font-semibold text-x1 text-gray-800 leading-tight"></h2>
    </div>
  </header>
  <main>
    <div class="container max-w-7x1 mx-auto sm:px-6 lg:px-8 mt-4">
      <h2>Layout Float</h2>
      <p>In this example, we have created a header, two columns/boxes and a footer. On smaller screens, the columns will
        stack on top of each other.</p>
      <p>Resize the browser window to see the responsive effect (you will learn more about this in our next chapter -
        HTML Responsive.)</p>



      <section>
        <nav>
          <ul>
            <li><a href="#">London</a></li>
            <li><a href="#">Paris</a></li>
            <li><a href="#">Tokyo</a></li>
          </ul>
        </nav>

        <article>
          <h1>London</h1>
          <p>London is the capital city of England. It is the most populous city in the United Kingdom, with a
            metropolitan area of over 13 million inhabitants.</p>
          <p>Standing on the River Thames, London has been a major settlement for two millennia, its history going back
            to its founding by the Romans, who named it Londinium.</p>
        </article>
      </section>

      <footer>
        <p>Footer</p>
      </footer>
    </div>
  </main>

  </html>
</x-app-layout>