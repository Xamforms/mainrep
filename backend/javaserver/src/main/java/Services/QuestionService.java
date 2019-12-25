package Services;

import DAO.MarksDAO;
import DAO.QuestionsDAO;
import DAO.TestsDAO;
import DataSets.*;
import org.hibernate.HibernateException;
import org.hibernate.Session;
import org.hibernate.SessionFactory;
import org.hibernate.Transaction;
import org.hibernate.boot.registry.StandardServiceRegistryBuilder;
import org.hibernate.cfg.Configuration;
import org.hibernate.service.ServiceRegistry;

public class QuestionService {

    private final SessionFactory sessionFactory;
    private static final String hibernate_show_sql = "true";
    private static final String hibernate_hbm2ddl_auto = "update";

    public QuestionService() {
        Configuration configuration = getPostgreConfiguration();
        sessionFactory = createSessionFactory(configuration);
    }

    public Configuration getPostgreConfiguration() {
        Configuration configuration = new Configuration();
        configuration.addAnnotatedClass(AnswersDataSet.class);
        configuration.addAnnotatedClass(GroupsDataSet.class);
        configuration.addAnnotatedClass(MarksDataSet.class);
        configuration.addAnnotatedClass(QuestionsDataSet.class);
        configuration.addAnnotatedClass(StudentsDataSet.class);
        configuration.addAnnotatedClass(TeachersDataSet.class);
        configuration.addAnnotatedClass(TestsDataSet.class);
        configuration.setProperty("hibernate.dialect", "org.hibernate.dialect.PostgreSQL94Dialect");
        configuration.setProperty("hibernate.connection.driver_class", "org.postgresql.Driver");
        configuration.setProperty("hibernate.connection.url", "jdbc:postgresql://localhost:5432/postgres");
        configuration.setProperty("hibernate.connection.username", "postgres");
        configuration.setProperty("hibernate.connection.password", "kainen");
        configuration.setProperty("hibernate.show_sql", hibernate_show_sql);
        configuration.setProperty("hibernate.hbm2ddl.auto", hibernate_hbm2ddl_auto);
        return configuration;
    }

    private static SessionFactory createSessionFactory(Configuration configuration) {
        StandardServiceRegistryBuilder builder = new StandardServiceRegistryBuilder();
        builder.applySettings(configuration.getProperties());
        ServiceRegistry serviceRegistry = builder.build();
        return configuration.buildSessionFactory(serviceRegistry);
    }

    public void addQuestion(String name, String type) throws Exception{
        try {
            Session session = sessionFactory.openSession();
            Transaction transaction = session.beginTransaction();
            QuestionsDAO dao = new QuestionsDAO(session);
            dao.insertQuestion(name, type);
            transaction.commit();
            session.close();
        } catch (HibernateException e) {
            throw new Exception(e);
        }
    }

    public void addFullQuestion(QuestionsDataSet question) throws Exception {
        try {
            Session session = sessionFactory.openSession();
            Transaction transaction = session.beginTransaction();
            QuestionsDAO dao = new QuestionsDAO(session);
            dao.insertFullQuestion(question);
            transaction.commit();
            session.close();
        } catch (HibernateException e) {
            throw new Exception(e);
        }
    }
}
