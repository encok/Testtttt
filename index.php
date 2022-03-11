
{% extends "blog/base.html" %}
{% load crispy_forms_tags %}
{% block content %}
   <div class="content-section">
      <form method="POST">
          {% csrf_token %}
          <fieldset class="form-group">
              <legend class="border-bottom mb-4">Join Today</legend>
              {{ form|crispy }}

          </fieldset>
          <div class="form-group">
              <button class="btn btn-outline-info" type="submit">Sign Up</button>
          </div>
          
      </form>
      <div class="border-top pt-3">
          <small class="text-muted">
              Already Have An Account?<a class="ml-2" href="{% url 'login' %}"> Sign In</a>
          </small>
      </div>
   </div> 
{% endblock content %}

  

