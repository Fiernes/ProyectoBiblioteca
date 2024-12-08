// Traducciones globales
const translations = {
    es: {
      login_title: "Iniciar Sesión",
      login_button: "Iniciar Sesión",
      register_link: "Regístrate",
      no_Cu: "¿No tienes una cuenta?",
      page_title: "Semillas del Saber",
    about_link: "Acerca de",
    login_button: "Login",
    register_button: "Registrate",
    welcome_title: "Bienvenido a Semillas del Saber",
    welcome_text: "Esta biblioteca es mucho más que un simple depósito de libros. Es un portal hacia el conocimiento, la cultura y la imaginación. Gracias a los servicios de préstamo, las bibliotecas se convierten en espacios democráticos donde cualquier persona, sin importar su origen o condición social, puede acceder a una infinidad de recursos informativos.",
    footer_text: "&copy; 2024 SEMILLAS DEL SABER.",
      placeholder_username: "Nombre de Usuario",
      page_title: "Perfil Administrador",
    admin_name: "ADMIRIAH REID CASSANO",
    show_profile: "Mostrar Perfil",
    admin_title: "Administrador",
    control_panel: "Panel de Control",
    manage_users: "Gestión de Usuarios",
    inventory_management: "Gestión de Inventario",
    system_logs: "Logs del Sistema",
    back_button: "Volver",
    page_titlecarrito: "Carrito",
    cart_title: "Carrito de Préstamos",
    user_label: "Usuario:",
    cart_status: "Estado: Pendiente",
    code_column: "Código",
    book_name_column: "Nombre del libro",
    category_column: "Categoría",
    author_column: "Autor",
    edition_column: "Ejemplar",
    book_status_column: "Estado del libro",
    actions_column: "Acciones",
    delete_button: "Eliminar",
    total_books: "Total de libros a prestar:",
    request_button: "Solicitar",
    page_title: "Prestamos y Devoluciones",
    loans_title: "Prestamos y Devoluciones",
    loans_description: "Aquí puedes consultar el estado de los préstamos y devoluciones de libros.",
    cancel_button: "Cancelar",
    page_title: "Perfil Empleado",
    employee_name: "FREDY HUGO DÍAZ LOZANO",
    show_profile: "Mostrar Perfil",
    employee_title: "Empleado",
    control_panel: "Panel de Control",
    inventory_management: "Gestión de Inventario",
    back_button: "Volver",
    page_title: "Estadísticas y KPI",
    stat1: "Estadística 1",
    stat2: "Estadística 2",
    stat3: "Estadística 3",
    stat4: "Estadística 4",
    stat5: "Estadística 5",
    back_button: "Volver",
    page_title: "Historial de Usuario",
    history_title: "Historial de Usuario",
    loans_title: "PRÉSTAMOS",
    book_column: "Libro",
    loan_date_column: "Fecha de Préstamo",
    return_date_column: "Fecha de Devolución",
    loan_status_column: "Estado del Préstamo",
    returns_title: "DEVOLUCIONES",
    status_column: "Estado",
    fine_column: "Multa Aplicada",
    fines_title: "MULTAS",
    reason_column: "Motivo",
    date_column: "Fecha",
    amount_column: "Monto",
    summary_title: "RESUMEN",
    total_books_label: "Total libros Prestados: 43",
    favorite_book_label: "Libro Favorito: Programación para tontos, 8va edición.",
    total_fines_label: "Total Multas: 0",
    back_button: "Volver",
    page_title: "Gestión de Inventario",
    inventory_management_title: "Gestión de Inventario",
    inventory_title: "Inventario",
    search_placeholder: "Buscar...",
    search_button: "Buscar",
    code_column: "Código",
    title_column: "Título",
    author_column: "Autor",
    date_column: "Fecha",
    category_column: "Categoría",
    available_column: "Disponible",
    status_column: "Estado",
    back_button: "Volver",
    option1: "Opcion 1",
    option2: "Opcion 2",
    page_title: "Logs del Sistema",
    system_logs_title: "Logs del Sistema",
    search_placeholder: "Buscar...",
    search_button: "Buscar",
    log_number_column: "Número",
    action_column: "Acción",
    date_column: "Fecha",
    user_column: "Usuario",
    detail_column: "Detalle Acción",
    back_button: "Volver",
    option1: "Opcion 1",
    option2: "Opcion 2",
    page_title: "System Logs",
    system_logs_title: "System Logs",
    search_placeholder: "Search...",
    search_button: "Search",
    log_number_column: "Number",
    action_column: "Action",
    date_column: "Date",
    user_column: "User",
    detail_column: "Action Details",
    back_button: "Back",
    option1: "Option 1",
    option2: "Option 2",
    page_title: "Biblioteca",
    hamburger_button: "☰",
    categories_title: "Categorías",
    category_law: "Derecho",
    category_entertainment: "Entretenimiento",
    category_finance: "Finanzas",
    category_history: "Historia",
    category_languages: "Lenguas extranjeras",
    category_medicine: "Medicina",
    category_technology: "Tecnología",
    welcome_message: "Bienvenido a la Biblioteca",
    books_suggestion: "Aquí hay algunos libros que te pueden interesar",
    view_more_button: "Ver más",
    author_label: "Autor:",
    year_label: "Año:",
    description_label: "Descripción:",
    book_title1: "Métodos Cuantitativos I",
    book_title9: "Derecho Civil: Manual de Obligaciones y Contratos",
    page_title: "Biblioteca",
    welcome_message: "Bienvenido a la Biblioteca",
    books_suggestion: "Aquí hay algunos libros que te pueden interesar",
    view_more_button: "Ver más",
    author_label: "Autor:",
    year_label: "Año:",
    description_label: "Descripción:",
    book_title1: "Métodos Cuantitativos I",
    book_title2: "Paradogas y Fundamentos de la Matematica",
    book_title3: "Mafalda",
    book_title4: "Tecnología con énfasis en informática",
    book_title5: "Atlas de anatomía humana",
    book_title6: "Historia Universal",
    book_title7: "Atlantis and Lemuria",
    book_title8: "Lenguas extranjeras",
    book_title9: "Finanzas",
    book_title10: "Derecho Civil: Manual de Obligaciones y Contratos",
    category_law: "Derecho",
    category_entertainment: "Entretenimiento",
    category_finance: "Finanzas",
    category_history: "Historia",
    category_languages: "Lenguas extranjeras",
    category_medicine: "Medicina",
    category_technology: "Tecnología",
    page_title: "Barra",
    home_link: "Inicio",
    menu_link: "Menu",
    about_us_link: "Sobre nosotros",
    cart_button: "Carrito",
    user_icon: "Icono de usuario",
    username_label: "Usuario",
    profile_link: "Perfil",
    history_link: "Historial",
    logout_link: "Cerrar sesión",
    page_title: "Nosotros",
    home_link: "Inicio",
    login_button: "Login",
    register_button: "Registrate",
    about_us_title: "Sobre nosotros",
    virtual_library_title: "Biblioteca Virtual",
    virtual_library_description: "Bienvenido a la biblioteca virtual. Es un espacio digital que alberga una vasta colección de recursos informativos organizados y accesibles en línea. Gracias a esta plataforma podrás tener acceso a tus libros favoritos. Además, estas bibliotecas virtuales te ofrecen una serie de ventajas adicionales, como la posibilidad de realizar búsquedas personalizadas y crear tu perfil.",
    services_title: "Servicios",
    services_description: "Al tener acceso a tu biblioteca estudiantil podrás solicitar préstamos de los libros que necesites. ¡Descubre un mundo de conocimiento al alcance de un clic!",
    copyright: "© 2024 SEMILLAS DEL SABER. Todos los derechos reservados.",
    facebook_icon: "Facebook",
    twitter_icon: "Twitter",
    instagram_icon: "Instagram",
    page_title: "Panel de Control",
    control_panel_title: "Panel de Control",
    loans_returns_control: "Control de Prestamos y Devoluciones",
    statistics_kpi: "Estadísticas y KPI",
    back_button: "Volver",
    page_title: "Perfil de Usuario",
    profile_title: "Perfil de Usuario",
    full_name_label: "Nombre Completo",
    account_number_label: "Número de Cuenta",
    dni_label: "DNI",
    email_label: "Correo Electrónico",
    phone_number_label: "Número de Teléfono",
    username_label: "Nombre de Usuario",
    personal_phone_label: "Teléfono Personal",
    address_label: "Dirección",
    edit_button: "Editar Perfil",
    save_button: "Guardar Cambios",
    back_button: "Volver",
    history_title: "Historial",
    borrowed_books_label: "Libros prestados",
    fines_label: "Multas",
    active_loans_label: "Préstamos activos",
    full_history_button: "Historial completo",
    page_title: "Registro",
    home_link: "Inicio",
    about_us_link: "Acerca de",
    register_title: "REGISTRO",
    registration_message: "El conocimiento jamás había estado tan cerca.",
    submit_button: "Registrate",
    page_title: "Gestión de Usuarios",
    form_title: "Formulario para Registrar Nuevos Empleados",
    form_description: "Este formulario permite registrar la información básica de los empleados para su gestión dentro de la empresa.",
    register_employee: "Registro de Empleados",
    first_name_label: "Primer Nombre",
    second_name_label: "Segundo Nombre",
    first_surname_label: "Primer Apellido",
    second_surname_label: "Segundo Apellido",
    dni_label: "DNI",
    email_label: "Correo Electrónico",
    address_title: "Dirección",
    city_label: "Ciudad",
    neighborhood_label: "Colonia",
    street_label: "Calle",
    house_number_label: "Número de Casa",
    block_label: "Bloque",
    phone_label: "Teléfono",
    alternate_phone_label: "Teléfono Alterno",
    position_label: "Puesto",
    work_schedule_label: "Horario Laboral",
    username_label: "Usuario",
    password_label: "Contraseña",
    confirm_password_label: "Confirmar Contraseña",
    register_button: "Registrar",
    cancel_button: "Cancelar",
    page_title: "Gestión de Inventario",
    register_books_title: "REGISTRO LIBROS",
    book_registration_info: "El conocimiento jamas habia estado tan cerca.",
    option_1: "Opción 1",
    option_2: "Opción 2",
    choose_category: "Elija su categoria",
    submit_button: "Ingresar",
    register_category_title: "REGISTRAR CATEGORÍAS",
    create_button: "Crear",
    user_management_title: "Gestión de Usuarios",
    user_table_icon: "Usuarios",
    user_table_title: "Tabla de Usuarios",
    search_placeholder: "Buscar...",
    search_button: "Buscar",
    back_button: "Volver",
    option_1: "Opción 1",
    option_2: "Opción 2",
    
    },
    en: {
      login_title: "Login",
      login_button: "Sign In",
      register_link: "Register",
      no_Cu: "Don't have an account?",
      page_title: "Seeds of Knowledge",
    about_link: "About",
    login_button: "Log In",
    register_button: "Sign Up",
    welcome_title: "Welcome to Seeds of Knowledge",
    welcome_text: "This library is much more than just a repository of books. It is a gateway to knowledge, culture, and imagination. Thanks to lending services, libraries become democratic spaces where anyone, regardless of their background or social status, can access an infinite amount of informational resources.",
    footer_text: "&copy; 2024 SEEDS OF KNOWLEDGE.",
      placeholder_username: "username",
      page_title: "Administrator Profile",
    admin_name: "ADMIRIAH REID CASSANO",
    show_profile: "Show Profile",
    admin_title: "Administrator",
    control_panel: "Control Panel",
    manage_users: "User Management",
    inventory_management: "Inventory Management",
    system_logs: "System Logs",
    back_button: "Back",
    page_title: "Cart",
    cart_title: "Loan Cart",
    user_label: "User:",
    cart_status: "Status: Pending",
    code_column: "Code",
    book_name_column: "Book Name",
    category_column: "Category",
    author_column: "Author",
    edition_column: "Edition",
    book_status_column: "Book Status",
    actions_column: "Actions",
    delete_button: "Delete",
    total_books: "Total books to borrow:",
    request_button: "Request",
    page_title: "Loans and Returns",
    loans_title: "Loans and Returns",
    loans_description: "Here you can check the status of book loans and returns.",
    cancel_button: "Cancel",
    page_title: "Employee Profile",
    employee_name: "FREDY HUGO DÍAZ LOZANO",
    show_profile: "Show Profile",
    employee_title: "Employee",
    control_panel: "Control Panel",
    inventory_management: "Inventory Management",
    back_button: "Back",
    page_title: "Statistics and KPI",
    stat1: "Statistic 1",
    stat2: "Statistic 2",
    stat3: "Statistic 3",
    stat4: "Statistic 4",
    stat5: "Statistic 5",
    back_button: "Back",
    page_title: "User History",
    history_title: "User History",
    loans_title: "LOANS",
    book_column: "Book",
    loan_date_column: "Loan Date",
    return_date_column: "Return Date",
    loan_status_column: "Loan Status",
    returns_title: "RETURNS",
    status_column: "Status",
    fine_column: "Fine Applied",
    fines_title: "FINES",
    reason_column: "Reason",
    date_column: "Date",
    amount_column: "Amount",
    summary_title: "SUMMARY",
    total_books_label: "Total books loaned: 43",
    favorite_book_label: "Favorite Book: Programming for Dummies, 8th edition.",
    total_fines_label: "Total Fines: 0",
    back_button: "Back",
    page_title: "Inventory Management",
    inventory_management_title: "Inventory Management",
    inventory_title: "Inventory",
    search_placeholder: "Search...",
    search_button: "Search",
    code_column: "Code",
    title_column: "Title",
    author_column: "Author",
    date_column: "Date",
    category_column: "Category",
    available_column: "Available",
    status_column: "Status",
    back_button: "Back",
    option1: "Option 1",
    option2: "Option 2",
    page_title: "Library",
    hamburger_button: "☰",
    categories_title: "Categories",
    category_law: "Law",
    category_entertainment: "Entertainment",
    category_finance: "Finance",
    category_history: "History",
    category_languages: "Foreign Languages",
    category_medicine: "Medicine",
    category_technology: "Technology",
    welcome_message: "Welcome to the Library",
    books_suggestion: "Here are some books you might like",
    view_more_button: "View More",
    author_label: "Author:",
    year_label: "Year:",
    description_label: "Description:",
    book_title1: "Quantitative Methods I",
    book_title9: "Civil Law: Manual of Obligations and Contracts",
    page_title: "Library",
    welcome_message: "Welcome to the Library",
    books_suggestion: "Here are some books you might like",
    view_more_button: "View More",
    author_label: "Author:",
    year_label: "Year:",
    description_label: "Description:",
    book_title1: "Quantitative Methods I",
    book_title2: "Paradigms and Fundamentals of Mathematics",
    book_title3: "Mafalda",
    book_title4: "Technology with emphasis on IT",
    book_title5: "Atlas of Human Anatomy",
    book_title6: "World History",
    book_title7: "Atlantis and Lemuria",
    book_title8: "Foreign Languages",
    book_title9: "Finance",
    book_title10: "Civil Law: Manual of Obligations and Contracts",
    category_law: "Law",
    category_entertainment: "Entertainment",
    category_finance: "Finance",
    category_history: "History",
    category_languages: "Foreign Languages",
    category_medicine: "Medicine",
    category_technology: "Technology",
    page_title: "Bar",
    home_link: "Home",
    menu_link: "Menu",
    about_us_link: "About Us",
    cart_button: "Cart",
    user_icon: "User Icon",
    username_label: "Username",
    profile_link: "Profile",
    history_link: "History",
    logout_link: "Logout",
    page_title: "About Us",
    home_link: "Home",
    login_button: "Login",
    register_button: "Register",
    about_us_title: "About Us",
    virtual_library_title: "Virtual Library",
    virtual_library_description: "Welcome to the virtual library. It is a digital space that houses a vast collection of organized and accessible informational resources. Thanks to this platform, you will have access to your favorite books. Additionally, these virtual libraries offer several additional benefits, such as the ability to perform customized searches and create your profile.",
    services_title: "Services",
    services_description: "By accessing your student library, you will be able to request loans for the books you need. Discover a world of knowledge at the click of a button!",
    copyright: "© 2024 SEMILLAS DEL SABER. All rights reserved.",
    facebook_icon: "Facebook",
    twitter_icon: "Twitter",
    instagram_icon: "Instagram",
    page_title: "Control Panel",
    control_panel_title: "Control Panel",
    loans_returns_control: "Loans and Returns Control",
    statistics_kpi: "Statistics and KPIs",
    back_button: "Back",
    page_title: "User Profile",
    profile_title: "User Profile",
    full_name_label: "Full Name",
    account_number_label: "Account Number",
    dni_label: "ID Number",
    email_label: "Email Address",
    phone_number_label: "Phone Number",
    username_label: "Username",
    personal_phone_label: "Personal Phone",
    address_label: "Address",
    edit_button: "Edit Profile",
    save_button: "Save Changes",
    back_button: "Back",
    history_title: "History",
    borrowed_books_label: "Books Borrowed",
    fines_label: "Fines",
    active_loans_label: "Active Loans",
    full_history_button: "Full History",
    page_title: "Registration",
    home_link: "Home",
    about_us_link: "About Us",
    register_title: "REGISTRATION",
    registration_message: "Knowledge has never been this close.",
    submit_button: "Register",
    page_title: "User Management",
    form_title: "Form to Register New Employees",
    form_description: "This form allows registering basic information about employees for their management within the company.",
    register_employee: "Employee Registration",
    first_name_label: "First Name",
    second_name_label: "Second Name",
    first_surname_label: "First Surname",
    second_surname_label: "Second Surname",
    dni_label: "ID Number",
    email_label: "Email Address",
    address_title: "Address",
    city_label: "City",
    neighborhood_label: "Neighborhood",
    street_label: "Street",
    house_number_label: "House Number",
    block_label: "Block",
    phone_label: "Phone",
    alternate_phone_label: "Alternate Phone",
    position_label: "Position",
    work_schedule_label: "Work Schedule",
    username_label: "Username",
    password_label: "Password",
    confirm_password_label: "Confirm Password",
    register_button: "Register",
    cancel_button: "Cancel",
    page_title: "Inventory Management",
    register_books_title: "REGISTER BOOKS",
    book_registration_info: "Knowledge has never been so close.",
    option_1: "Option 1",
    option_2: "Option 2",
    choose_category: "Choose your category",
    submit_button: "Submit",
    register_category_title: "REGISTER CATEGORIES",
    create_button: "Create",
    user_management_title: "User Management",
    user_table_icon: "Users",
    user_table_title: "User Table",
    search_placeholder: "Search...",
    search_button: "Search",
    back_button: "Back",
    option_1: "Option 1",
    option_2: "Option 2",
    }
  };
  
  // Guardar el idioma seleccionado en localStorage
  function setLanguage(language) {
    localStorage.setItem('language', language); // Guardar idioma
    applyLanguage(language);
    alert(`Idioma seleccionado: ${language === 'es' ? 'Español' : 'English'}`);
    // Redirigir a la misma página para aplicar el cambio
    window.location.reload(); // Recarga la página
  }
  
  // Aplicar el idioma al cargar la página
  function applyLanguage(language) {
    const savedLanguage = localStorage.getItem('language') || 'es'; // Idioma por defecto: Español
    const elements = document.querySelectorAll("[data-translate]");
  
    elements.forEach(element => {
      const key = element.getAttribute("data-translate");
      if (translations[savedLanguage] && translations[savedLanguage][key]) {
        element.textContent = translations[savedLanguage][key];
      }
    });
  
    // Cambiar el título de la página también
    document.title = translations[savedLanguage].login_title || document.title;
  }
  
  // Ejecutar al cargar la página
  document.addEventListener('DOMContentLoaded', () => {
    const savedLanguage = localStorage.getItem('language') || 'en'; // Cargar el idioma guardado
    applyLanguage(savedLanguage);
  });
  